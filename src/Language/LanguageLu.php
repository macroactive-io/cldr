<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Territory\TerritoryCd;

/**
 * Class LanguageLu - Representation of the Luba-Katanga language.
 * @psalm-immutable
 */
class LanguageLu extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'lu';
    }

    public function defaultTerritory(): TerritoryCd
    {
        return new TerritoryCd();
    }
}
