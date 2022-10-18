<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule0;
use Macroactive\Cldr\Territory\TerritoryCf;

/**
 * Class LanguageSg - Representation of the Sango language.
 * @psalm-immutable
 */
class LanguageSg extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'sg';
    }

    public function defaultTerritory(): TerritoryCf
    {
        return new TerritoryCf();
    }

    public function pluralRule(): PluralRule0
    {
        return new PluralRule0();
    }
}
