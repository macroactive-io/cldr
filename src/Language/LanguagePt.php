<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Territory\TerritoryPt;

/**
 * Class LanguagePt - Representation of the Portuguese language.
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

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
