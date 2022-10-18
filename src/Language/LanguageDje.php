<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\Territory\TerritoryNe;

/**
 * Class LanguageDje - Representation of the Zarma language.
 * @psalm-immutable
 */
class LanguageDje extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'dje';
    }

    public function defaultTerritory(): TerritoryNe
    {
        return new TerritoryNe();
    }
}
