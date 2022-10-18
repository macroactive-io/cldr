<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\Territory\TerritoryKe;

/**
 * Class LanguageLuo - Representation of the Luo (Kenya and Tanzania) language.
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
