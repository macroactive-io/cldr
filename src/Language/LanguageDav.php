<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\Territory\TerritoryKe;

/**
 * Taita
 *
 * @psalm-immutable
 */
class LanguageDav extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'dav';
    }

    public function defaultTerritory(): TerritoryKe
    {
        return new TerritoryKe();
    }
}
