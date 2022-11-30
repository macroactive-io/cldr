<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\Territory\TerritorySb;

/**
 * Class LanguageEn - Representation of the English language.
 
 * @psalm-immutable
 */
class LanguagePis extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'pis';
    }

    public function defaultTerritory(): TerritorySb
    {
        return new TerritorySb();
    }
}
