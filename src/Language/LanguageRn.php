<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\Territory\TerritoryBi;

/**
 * Rundi
 *
 * @psalm-immutable
 */
class LanguageRn extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Rundi';
    }

    public function code(): string
    {
        return 'rn';
    }

    public function defaultTerritory(): TerritoryBi
    {
        return new TerritoryBi();
    }
}
