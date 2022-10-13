<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Territory\TerritoryCm;

/**
 * Class LanguageYav - Representation of the Yangben language.
 * @psalm-immutable
 */
class LanguageYav extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'yav';
    }

    public function defaultTerritory(): TerritoryCm
    {
        return new TerritoryCm();
    }
}
