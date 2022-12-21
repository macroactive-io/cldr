<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\Territory\TerritoryNe;

/**
 * Zarma
 *
 * @psalm-immutable
 */
class LanguageDje extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Zarma';
    }

    public function code(): string
    {
        return 'dje';
    }

    public function defaultTerritory(): TerritoryNe
    {
        return new TerritoryNe();
    }
}
