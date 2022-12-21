<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\Territory\TerritoryKe;

/**
 * Kamba (Kenya)
 *
 * @psalm-immutable
 */
class LanguageKam extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Kamba';
    }

    public function code(): string
    {
        return 'kam';
    }

    public function defaultTerritory(): TerritoryKe
    {
        return new TerritoryKe();
    }
}
