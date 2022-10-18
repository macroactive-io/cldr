<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\Territory\TerritoryCm;

/**
 * Class LanguageEwo - Representation of the Ewondo language.
 * @psalm-immutable
 */
class LanguageEwo extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'ewo';
    }

    public function defaultTerritory(): TerritoryCm
    {
        return new TerritoryCm();
    }
}
