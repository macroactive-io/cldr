<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\Territory\TerritoryCm;

/**
 * Class LanguageMua - Representation of the Mundang language.
 * @psalm-immutable
 */
class LanguageMua extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'mua';
    }

    public function defaultTerritory(): TerritoryCm
    {
        return new TerritoryCm();
    }
}
