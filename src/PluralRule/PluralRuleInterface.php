<?php

declare(strict_types=1);

namespace Macroactive\Cldr\PluralRule;

/**
 * Interface PluralRuleInterface - Select a plural form for a specified number.
 *
 * @website          https://unicode-org.github.io/cldr-staging/charts/latest/supplemental/language_plural_rules.html
 * @website          https://developer.mozilla.org/en-US/docs/Mozilla/Localization/Localization_and_Plurals
 * @website          http://docs.translatehouse.org/projects/localization-guide/en/latest/l10n/pluralforms.html
 */
interface PluralRuleInterface
{
    /**
     * How many plural forms exist.
     */
    public function plurals(): int;

    /**
     * Which plural form to use for a specified number.
     *
     * @param int $number
     */
    public function plural(int $number): int;
}
