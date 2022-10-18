<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Territory\TerritorySz;

/**
 * Class LanguageSs - Representation of the Swati language.
 *
 * @psalm-immutable
 */
class LanguageSs extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'ss';
    }

    public function defaultTerritory(): TerritorySz
    {
        return new TerritorySz();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
