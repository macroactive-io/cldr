<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\Territory\TerritoryCm;

/**
 * Basa (Cameroon)
 *
 * @psalm-immutable
 */
class LanguageBas extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'bas';
    }

    public function defaultTerritory(): TerritoryCm
    {
        return new TerritoryCm();
    }
}
