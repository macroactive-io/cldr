<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Territory\TerritoryCm;

/**
 * Class LanguageKsf - Representation of the Bafia language.
 * @psalm-immutable
 */
class LanguageKsf extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'ksf';
    }

    public function defaultTerritory(): TerritoryCm
    {
        return new TerritoryCm();
    }
}
