<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule10;
use Macroactive\Cldr\Territory\TerritorySi;

/**
 * Class LanguageSl - Representation of the Slovenian language.
 *
 * @psalm-immutable
 */
class LanguageSl extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'sl';
    }

    public function defaultTerritory(): TerritorySi
    {
        return new TerritorySi();
    }

    public function pluralRule(): PluralRule10
    {
        return new PluralRule10();
    }
}
