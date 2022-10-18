<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRuleOneTwoOther;
use Macroactive\Cldr\Territory\TerritoryFi;

/**
 * Class LanguageSms - Representation of the Skolt Sami language.
 *
 * @psalm-immutable
 */
class LanguageSms extends AbstractLanguage implements LanguageInterface
{
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
