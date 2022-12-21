<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\Territory\TerritoryKe;

/**
 * Embu
 *
 * @psalm-immutable
 */
class LanguageEbu extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Embu';
    }

    public function code(): string
    {
        return 'ebu';
    }

    public function defaultTerritory(): TerritoryKe
    {
        return new TerritoryKe();
    }
}
