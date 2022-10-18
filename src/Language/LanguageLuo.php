<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\Territory\TerritoryKe;

/**
 * Luo (Kenya and Tanzania)
 *
 * @psalm-immutable
 */
class LanguageLuo extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'luo';
    }

    public function defaultTerritory(): TerritoryKe
    {
        return new TerritoryKe();
    }
}
