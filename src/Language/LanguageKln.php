<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\Territory\TerritoryKe;

/**
 * Kalenjin
 *
 * @psalm-immutable
 */
class LanguageKln extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Kalenjin';
    }

    public function code(): string
    {
        return 'kln';
    }

    public function defaultTerritory(): TerritoryKe
    {
        return new TerritoryKe();
    }
}
