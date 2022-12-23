<?php

declare(strict_types=1);

namespace Macroactive\Cldr;

use DomainException;
use Macroactive\Cldr\Locale\LocaleInterface;
use RuntimeException;

use function array_combine;
use function array_key_exists;
use function array_keys;
use function array_map;
use function arsort;
use function implode;
use function in_array;
use function preg_match_all;
use function preg_split;
use function str_replace;
use function strcmp;
use function strtolower;
use function ucfirst;

/**
 * Class Locale - Static functions to generate and compare locales.
 */
final class Locale
{
    /** Some browsers let the user choose "Chinese, Traditional", but add headers for "zh-HK"... */
    private static array $http_accept_chinese = [
        'zh-cn' => 'zh-hans-cn',
        'zh-sg' => 'zh-hans-sg',
        'zh-hk' => 'zh-hant-hk',
        'zh-mo' => 'zh-hant-mo',
        'zh-tw' => 'zh-hant-tw',
    ];

    /**
     * Callback for PHP sort functions - allows lists of locales to be sorted.
     * Diacritics are removed and text is capitalized to allow fast/simple sorting.
     */
    public static function compare(LocaleInterface $x, LocaleInterface $y): int
    {
        return strcmp($x->endonymSortable(), $y->endonymSortable());
    }

    /**
     * Create a locale from a language tag (or locale code).
     *
     * @throws DomainException
     */
    public static function create(string $code): LocaleInterface
    {
        $class = __NAMESPACE__ . '\Locale\Locale' . implode(
            '',
            array_map(
                static fn (string $x): string => ucfirst(strtolower($x)),
                preg_split('/[^a-zA-Z0-9]+/', $code)
            )
        );

        if (class_exists($class)) {
            return new $class();
        }

        throw new DomainException(sprintf('Cannot find locale for code "%s"', $code));
    }

    /**
     * Create a locale from a language tag (or locale code).
     *
     * @param string[]          $server    The $_SERVER array
     * @param LocaleInterface[] $available All locales supported by the application
     * @param LocaleInterface   $default   Locale to show in no matching locales
     */
    public static function httpAcceptLanguage(array $server, array $available, LocaleInterface $default): LocaleInterface
    {
        if (!isset($server['HTTP_ACCEPT_LANGUAGE'])) {
            return $default;
        }

        $http_accept_language = strtolower(str_replace(' ', '', $server['HTTP_ACCEPT_LANGUAGE']));
        /** @var array{1: array, 2: array} $match */
        $match = [];
        preg_match_all('/(?:([a-z][a-z0-9_-]+)(?:;q=([0-9.]+))?)/', $http_accept_language, $match);

        if (count($match[1]) === 0 || count($match[2]) === 0) {
            return $default;
        }

        $preferences = array_map(static fn ($x): float => $x === '' ? 1.0 : (float) $x, array_combine($match[1], $match[2]));

        // "Common sense" logic for badly configured clients.
        $preferences = self::httpAcceptChinese($preferences);
        $preferences = self::httpAcceptDowngrade($preferences);

        // Need a stable sort, as the original order is significant
        $preferences = array_map(static function (int|float $x): array {
            static $n = 0;

            return [$x, --$n];
        }, $preferences);
        arsort($preferences);
        $preferences = array_map(static fn ($x) => $x[0], $preferences);

        foreach (array_keys($preferences) as $code) {
            try {
                $locale = self::create($code);

                if (in_array($locale, $available, false)) {
                    return $locale;
                }
            } catch (DomainException $ex) {
                // An unknown locale?  Ignore it.
            }
        }

        return $default;
    }

    /**
     * @return iterable<LocaleInterface>
     */
    public static function all(): iterable
    {
        $all = glob(__DIR__ . '/Locale/Locale*.php');

        if (false === $all || count($all) === 0) {
            throw new RuntimeException('By some reason the list of locales cannot be obtained');
        }

        foreach ($all as $filename) {
            $localeName = basename($filename, '.php');

            if ('LocaleInterface' === $localeName) {
                continue;
            }

            $classname = __NAMESPACE__ . '\\Locale\\' . $localeName;

            if (!class_exists($classname)) {
                throw new DomainException(sprintf('File for locale %s exists but class cannot be found. Missed autoloading?', $classname));
            }

            yield new $classname();
        }
    }

    /**
     * If a client requests "de-DE" (but not "de"), then add "de" as a lower-priority fallback.
     *
     * @param array<non-empty-string, int|float> $preferences
     *
     * @return array<non-empty-string, int|float>
     */
    private static function httpAcceptDowngrade(array $preferences): array
    {
        foreach ($preferences as $code => $priority) {
            // Three parts: "zh-hans-cn" => "zh-hans" and "zh"
            if (preg_match('/^(([a-z]+)-[a-z]+)-[a-z]+$/', $code, $match)) {
                if (!array_key_exists($match[2], $preferences)) {
                    $preferences[$match[2]] = $priority * 0.95;
                }

                if (!array_key_exists($match[1], $preferences)) {
                    $preferences[$match[1]] = $priority * 0.95;
                }
            }
            // Two parts: "de-de" => "de"
            if (preg_match('/^([a-z]+)-[a-z]+$/', $code, $match) && !array_key_exists($match[1], $preferences)) {
                $preferences[$match[1]] = $priority * 0.95;
            }
        }

        return $preferences;
    }

    /**
     * Some browsers allow the user to select "Chinese (simplified)", but then use zh-CN instead of zh-Hans.
     * This goes against the advice of w3.org.
     *
     * @param array<non-empty-string, int|float> $preferences
     *
     * @return array<non-empty-string, int|float>
     */
    private static function httpAcceptChinese(array $preferences): array
    {
        foreach (self::$http_accept_chinese as $old => $new) {
            if (array_key_exists($old, $preferences) && !array_key_exists($new, $preferences)) {
                $preferences[$new] = $preferences[$old] * 0.95;
            }
        }

        return $preferences;
    }
}
