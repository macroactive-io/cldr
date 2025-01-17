<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\PluralRule\PluralRuleInterface;
use Macroactive\Cldr\Script\ScriptDirection;
use Macroactive\Cldr\Script\ScriptInterface;
use Macroactive\Cldr\Territory\TerritoryInterface;
use Macroactive\Cldr\Variant\VariantInterface;

/**
 * Interface LocaleInterface - Locale.
 *
 * @psalm-immutable
 */
interface LocaleInterface
{
    /**
     * Generate a linux locale code for this locale.  Examples include
     * "fr", “en_GB”, “ca_ES@valencia” and “sr@latin”.
     *
     * @return non-empty-string
     */
    public function code(): string;

    /**
     * Which collation sequence should be used for this locale?
     * “unicode_ci” would mean use “utf8_unicode_ci”, “utf8mb4_unicode_ci”, etc.
     *
     * @website http://dev.mysql.com/doc/refman/5.7/en/charset-unicode-sets.html
     *
     * @return non-empty-string
     */
    public function collation(): string;

    /**
     * Convert (Hindu-Arabic) digits into a localized form
     *
     * @param non-empty-string $string
     *
     * @return non-empty-string
     */
    public function digits(string $string): string;

    /**
     * Is text written left-to-right “ltr” or right-to-left “rtl”.
     * Most scripts are only written in one direction, but there are a few that
     * can be written in either direction.

     *
     * @psalm-immutable
     */
    public function direction(): ScriptDirection;

    /**
     * The name of this locale, in its own language/script, and with the
     * customary capitalization of the locale.
     * Can be obtained by xpath ldml/localeDisplayNames/languages/language[type=$localeName] in $localeName.xml file
     * Example: `Moscow` is the exonym, while `Moskva` is the endonym
     *
     * @return non-empty-string
     */
    public function endonym(): string;

    /**
     * A sortable version of the locale name.  For example, “British English”
     * might sort as “ENGLISH, BRITISH” to keep all the variants of English together.
     * All-capitals makes sorting easier, as we can use a simple strcmp().
     *
     * @return non-empty-string
     */
    public function endonymSortable(): string;

    /**
     * Markup for an HTML element
     *
     * @return non-empty-string e.g. lang="ar" dir="rtl"
     */
    public function htmlAttributes(): string;

    /**
     * The language used by this locale.

     *
     * @psalm-immutable
     */
    public function language(): LanguageInterface;

    /**
     * The IETF language tag for the locale.  Examples include
     * “fr, “en-GB”, “ca-ES-valencia” and “sr-Latn”.
     *
     * @return non-empty-string
     */
    public function languageTag(): string;

    /**
     * Convert (Hindu-Arabic) digits into a localized form
     *
     * @param int|float $number The number to be localized
     *
     * @return non-empty-string
     */
    public function number(int|float $number): string;

    /**
     * Convert (Hindu-Arabic) digits into a localized form
     *
     * @param float|int $number The number to be localized
     *
     * @return non-empty-string
     */
    public function percent(int|float $number): string;

    /**
     * Which plural rule is used in this locale
     */
    public function pluralRule(): PluralRuleInterface;

    /**
     * The script used by this locale.
     */
    public function script(): ScriptInterface;

    /**
     * The territory used by this locale.
     */
    public function territory(): TerritoryInterface;

    /**
     * The variant, if any of this locale.

     *
     * @psalm-immutable
     */
    public function variant(): ?VariantInterface;

    /**
     * An external name as oppose to endonym.
     * Example: `Moscow` is the exonym, while `Moskva` is the endonym
     *
     * @return non-empty-string
     */
    public function exonym(): string;
}
