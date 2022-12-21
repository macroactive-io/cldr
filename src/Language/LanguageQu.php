<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\Territory\TerritoryPe;

/**
 * Quechua
 *
 * @psalm-immutable
 */
class LanguageQu extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Quechua';
    }

    public function code(): string
    {
        return 'qu';
    }

    public function defaultTerritory(): TerritoryPe
    {
        return new TerritoryPe();
    }
}
