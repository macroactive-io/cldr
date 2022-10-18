<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\Territory\TerritoryCm;

/**
 * Class LanguageDua - Representation of the Duala language.
 * @psalm-immutable
 */
class LanguageDua extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'dua';
    }

    public function defaultTerritory(): TerritoryCm
    {
        return new TerritoryCm();
    }
}
