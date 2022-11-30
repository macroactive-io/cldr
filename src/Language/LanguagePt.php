<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule2WithMillions;
use Macroactive\Cldr\PluralRule\PluralRuleInterface;
use Macroactive\Cldr\Territory\TerritoryPt;

/**
 * Portuguese
 *
 * @psalm-immutable
 */
class LanguagePt extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'pt';
    }

    public function defaultTerritory(): TerritoryPt
    {
        return new TerritoryPt();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRule2WithMillions();
    }
}
