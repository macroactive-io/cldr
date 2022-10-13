<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Territory\TerritoryKe;

/**
 * Class LanguageEbu - Representation of the Embu language.
 * @psalm-immutable
 */
class LanguageEbu extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'ebu';
    }

    public function defaultTerritory(): TerritoryKe
    {
        return new TerritoryKe();
    }
}
