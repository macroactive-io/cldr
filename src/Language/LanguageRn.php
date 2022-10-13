<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Territory\TerritoryBi;

/**
 * Class LanguageRn - Representation of the Rundi language.
 * @psalm-immutable
 */
class LanguageRn extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'rn';
    }

    public function defaultTerritory(): TerritoryBi
    {
        return new TerritoryBi();
    }
}
