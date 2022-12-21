<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1WithMillions;
use Macroactive\Cldr\Territory\TerritoryPt;

/**
 * European Portuguese
 *
 * @psalm-immutable
 */
class LanguagePtPt extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'European Portuguese';
    }

    public function code(): string
    {
        return 'pt_PT';
    }

    public function defaultTerritory(): TerritoryPt
    {
        return new TerritoryPt();
    }

    public function pluralRule(): PluralRule1WithMillions
    {
        return new PluralRule1WithMillions();
    }
}
