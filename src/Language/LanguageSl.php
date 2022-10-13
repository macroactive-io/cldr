<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule10;
use Fisharebest\Localization\Territory\TerritorySi;

/**
 * Class LanguageSl - Representation of the Slovenian language.
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
