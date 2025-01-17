<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRuleZeroOneOther;
use Macroactive\Cldr\Territory\TerritoryDe;

/**
 * @psalm-immutable
 */
class LanguageKsh extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Kölsch';
    }

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
