<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\Territory\TerritoryEt;

/**
 * Afar
 *
 * @psalm-immutable
 */
class LanguageAa extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Afar';
    }

    public function code(): string
    {
        return 'aa';
    }

    public function defaultTerritory(): TerritoryEt
    {
        return new TerritoryEt();
    }
}
