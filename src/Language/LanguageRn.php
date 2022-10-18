<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\Territory\TerritoryBi;

/**
 * Class LanguageRn - Representation of the Rundi language.
 * @psalm-immutable
 */
class LanguageRn extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'rn';
    }

    public function defaultTerritory(): TerritoryBi
    {
        return new TerritoryBi();
    }
}
