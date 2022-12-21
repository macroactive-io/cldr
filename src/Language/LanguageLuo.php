<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\Territory\TerritoryKe;

/**
 * @psalm-immutable
 */
class LanguageLuo extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Luo (Kenya and Tanzania)';
    }

    public function code(): string
    {
        return 'luo';
    }

    public function defaultTerritory(): TerritoryKe
    {
        return new TerritoryKe();
    }
}
