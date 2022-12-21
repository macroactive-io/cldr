<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule2;
use Macroactive\Cldr\Territory\TerritoryDz;

/**
 * Kabyle
 *
 * @psalm-immutable
 */
class LanguageKab extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Kabyle';
    }

    public function code(): string
    {
        return 'kab';
    }

    public function defaultTerritory(): TerritoryDz
    {
        return new TerritoryDz();
    }

    public function pluralRule(): PluralRule2
    {
        return new PluralRule2();
    }
}
