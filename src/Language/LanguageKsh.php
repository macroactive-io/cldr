<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRuleZeroOneOther;
use Macroactive\Cldr\Territory\TerritoryDe;

/**
 * Class LanguageKsh - Representation of the Kölsch language.
 * @psalm-immutable
 */
class LanguageKsh extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'ksh';
    }

    public function defaultTerritory(): TerritoryDe
    {
        return new TerritoryDe();
    }

    public function pluralRule(): PluralRuleZeroOneOther
    {
        return new PluralRuleZeroOneOther();
    }
}
