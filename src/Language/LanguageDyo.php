<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Territory\TerritorySn;

/**
 * Class LanguageDyo - Representation of the Jola-Fonyi language.
 * @psalm-immutable
 */
class LanguageDyo extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'dyo';
    }

    public function defaultTerritory(): TerritorySn
    {
        return new TerritorySn();
    }
}
