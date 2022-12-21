<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\PluralRule\PluralRuleInterface;
use Macroactive\Cldr\Script\ScriptDirection;
use Macroactive\Cldr\Script\ScriptInterface;
use Macroactive\Cldr\Territory\TerritoryInterface;
use Macroactive\Cldr\Variant\VariantInterface;

use function assert;
use function count;
use function explode;
use function sprintf;
use function strlen;
use function strtoupper;
use function substr;

/**
 * The “root” locale, from which all others are derived.
 *
 * @psalm-immutable
 */
abstract class AbstractLocale implements LocaleInterface
{
    // "Source" strings, when translating numbers
    public const DECIMAL  = '.'; // The default decimal mark
    public const GROUP    = ','; // The digit group separator
    public const NEGATIVE = '-'; // Negative numbers

    // "Target" strings, when translating numbers
    public const ADLM_GROUP   = '⹁';
    public const ALM          = "\xD8\x9C"; // Arabic Letter Mark
    public const APOSTROPHE   = '’';
    public const ARAB_DECIMAL = "\xD9\xAB";
    public const ARAB_GROUP   = "\xD9\xAC";
    public const ARAB_MINUS   = "\xE2\x88\x92";
    public const ARAB_PERCENT = "\xD9\xAA";
    public const COMMA        = ',';
    public const DOT          = '.';
    public const HYPHEN       = '-';
    public const LTR_MARK     = "\xE2\x80\x8E"; // Left-to-right marker
    public const MINUS_SIGN   = "\xE2\x88\x92";
    public const NARROW_NBSP  = "\xE2\x80\xAF"; // Narrow non-breaking space
    public const NBSP         = "\xC2\xA0"; // Non-breaking space
    public const PRIME        = '\'';
    public const RTL_MARK     = "\xE2\x80\x8F"; // Right-to-left marker

    // For formatting percentages
    public const PERCENT     = '%%';
    public const PLACEHOLDER = '%s';

    public function code(): string
    {
        $code = $this->language()->code() . '_' . $this->territory()->code();

        if ($this->script()->code() !== $this->language()->defaultScript()->code()) {
            assert(null !== $this->script()->unicodeName());
            $code .= '@' . strtolower($this->script()->unicodeName());
        }

        if ($this->variant() !== null) {
            if ($this->variant()->code() === 'posix') {
                $code = 'POSIX';
            } else {
                $code .= '@' . $this->variant()->code();
            }
        }

        return $code;
    }

    public function collation(): string
    {
        return 'unicode_ci';
    }

    public function digits(string $string): string
    {
        $result = strtr($string, $this->numberSymbols() + $this->numerals());
        assert('' !== $result);

        return $result;
    }

    public function direction(): ScriptDirection
    {
        return $this->script()->direction();
    }

    abstract public function endonym(): string;

    public function endonymSortable(): string
    {
        return strtoupper($this->endonym());
    }

    public function htmlAttributes(): string
    {
        $direction       = $this->direction();
        $directionString = '';

        if ($direction === ScriptDirection::RTL || $direction !== $this->script()->direction()) {
            $directionString = match ($direction) {
                ScriptDirection::RTL => 'rtl',
                ScriptDirection::LTR => 'ltr',
            };
            $directionString = ' dir="' . $directionString . '"';
        }

        return 'lang="' . $this->languageTag() . '"' . $directionString;
    }

    abstract public function language(): LanguageInterface;

    public function languageTag(): string
    {
        $language_tag = $this->language()->code();

        if ($this->script()->code() !== $this->language()->defaultScript()->code()) {
            $language_tag .= '-' . $this->script()->code();
        }

        if ($this->territory()->code() !== $this->language()->defaultTerritory()->code()) {
            $language_tag .= '-' . $this->territory()->code();
        }

        if (null !== $this->variant()) {
            $language_tag .= '-' . $this->variant()->code();
        }

        return $language_tag;
    }

    public function number(int|float $number): string
    {
        if ($number < 0) {
            $number   = -$number;
            $negative = self::NEGATIVE;
        } else {
            $negative = '';
        }
        $parts    = explode(self::DECIMAL, (string) $number, 2);
        $integers = $parts[0];

        if (strlen($integers) >= $this->digitsFirstGroup() + $this->minimumGroupingDigits()) {
            $todo     = substr($integers, 0, -$this->digitsFirstGroup());
            $integers = self::GROUP . substr($integers, -$this->digitsFirstGroup());
            while (strlen($todo) >= $this->digitsGroup() + $this->minimumGroupingDigits()) {
                $integers = self::GROUP . substr($todo, -$this->digitsGroup()) . $integers;
                $todo     = substr($todo, 0, -$this->digitsGroup());
            }
            $integers = $todo . $integers;
        }

        if (count($parts) > 1) {
            $decimals = self::DECIMAL . $parts[1];
        } else {
            $decimals = '';
        }

        $result = $negative . $integers . $decimals;
        assert('' !== $result);

        return $this->digits($result);
    }

    public function percent(int|float $number): string
    {
        return sprintf($this->percentFormat(), $this->number($number * 100.0));
    }

    public function pluralRule(): PluralRuleInterface
    {
        return $this->language()->pluralRule();
    }

    public function script(): ScriptInterface
    {
        return $this->language()->defaultScript();
    }

    public function territory(): TerritoryInterface
    {
        return $this->language()->defaultTerritory();
    }

    public function variant(): ?VariantInterface
    {
        return null;
    }

    protected function digitsFirstGroup(): int
    {
        return 3;
    }

    /**
     * When writing large numbers place a separator after this number of digits.
     */
    protected function digitsGroup(): int
    {
        return 3;
    }

    /**
     * When using grouping digits in numbers, keep this many of digits together.
     *
     * @psalm-immutable
     */
    protected function minimumGroupingDigits(): int
    {
        return 1;
    }

    /**
     * The symbols used to format numbers.
     *
     * @return array<string, string>
     */
    protected function numberSymbols(): array
    {
        return [];
    }

    /**
     * The numerals (0123456789) used by this locale.
     *
     * @return string[]
     */
    protected function numerals(): array
    {
        return $this->script()->numerals();
    }

    /**
     * How to format a floating point number (%s) as a percentage.
     *
     * @return non-empty-string
     */
    protected function percentFormat(): string
    {
        return self::PLACEHOLDER . self::PERCENT;
    }
}
