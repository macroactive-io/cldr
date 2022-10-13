<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Territory\TerritoryCd;

/**
 * Class LanguageSwc - Representation of the Congo Swahili language.
 * @psalm-immutable
 */
class LanguageSwc extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'swc';
    }

    public function defaultTerritory(): TerritoryCd
    {
        return new TerritoryCd();
    }
}
