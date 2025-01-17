<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRuleOneTwoOther;
use Macroactive\Cldr\Territory\TerritoryFi;

/**
 * Skolt Sami
 *
 * @psalm-immutable
 */
class LanguageSms extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Skolt Sami';
    }

    public function code(): string
    {
        return 'sms';
    }

    public function defaultTerritory(): TerritoryFi
    {
        return new TerritoryFi();
    }

    public function pluralRule(): PluralRuleOneTwoOther
    {
        return new PluralRuleOneTwoOther();
    }
}
