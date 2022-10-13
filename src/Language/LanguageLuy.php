<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Territory\TerritoryKe;

/**
 * Class LanguageLuy - Representation of the Luyia language.
 * @psalm-immutable
 */
class LanguageLuy extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'luy';
    }

    public function defaultTerritory(): TerritoryKe
    {
        return new TerritoryKe();
    }
}
