<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Territory\TerritoryCm;

/**
 * Class LanguageAgq - Representation of the Aghem language.
 * @psalm-immutable
 */
class LanguageAgq extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'agq';
    }

    public function defaultTerritory(): TerritoryCm
    {
        return new TerritoryCm();
    }
}
