<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Territory\TerritorySd;

/**
 * Class LanguageNus - Representation of the Nuer language.
 * @psalm-immutable
 */
class LanguageNus extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'nus';
    }

    public function defaultTerritory(): TerritorySd
    {
        return new TerritorySd();
    }
}
