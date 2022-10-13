<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule11;
use Fisharebest\Localization\Territory\TerritoryIe;

/**
 * Class LanguageGa - Representation of the Irish language.
 * @psalm-immutable
 */
class LanguageGa extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'ga';
    }

    public function defaultTerritory(): TerritoryIe
    {
        return new TerritoryIe();
    }

    public function pluralRule(): PluralRule11
    {
        return new PluralRule11();
    }
}
