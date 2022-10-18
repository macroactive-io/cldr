<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\Territory\TerritoryCm;

/**
 * Class LanguageBas - Representation of the Basa (Cameroon) language.
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
