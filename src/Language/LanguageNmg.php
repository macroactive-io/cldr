<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Territory\TerritoryCm;

/**
 * Class LanguageNmg - Representation of the Kwasio language.
 * @psalm-immutable
 */
class LanguageNmg extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'nmg';
    }

    public function defaultTerritory(): TerritoryCm
    {
        return new TerritoryCm();
    }
}
