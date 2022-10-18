<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\Territory\TerritoryNe;

/**
 * Class LanguageTwq - Representation of the Tasawaq language.
 * @psalm-immutable
 */
class LanguageTwq extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'twq';
    }

    public function defaultTerritory(): TerritoryNe
    {
        return new TerritoryNe();
    }
}
