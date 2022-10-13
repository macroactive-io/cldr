<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Territory\TerritoryPe;

/**
 * Class LanguageQu - Representation of the Quechua language.
 * @psalm-immutable
 */
class LanguageQu extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'qu';
    }

    public function defaultTerritory(): TerritoryPe
    {
        return new TerritoryPe();
    }
}
