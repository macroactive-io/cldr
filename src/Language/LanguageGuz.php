<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\Territory\TerritoryKe;

/**
 * Gusii
 *
 * @psalm-immutable
 */
class LanguageGuz extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'guz';
    }

    public function defaultTerritory(): TerritoryKe
    {
        return new TerritoryKe();
    }
}
