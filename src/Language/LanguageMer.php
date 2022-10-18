<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\Territory\TerritoryKe;

/**
 * Meru
 *
 * @psalm-immutable
 */
class LanguageMer extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'mer';
    }

    public function defaultTerritory(): TerritoryKe
    {
        return new TerritoryKe();
    }
}
