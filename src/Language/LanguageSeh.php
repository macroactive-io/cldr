<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryMz;

/**
 * Class LanguageSeh - Representation of the Sena language.
 * @psalm-immutable
 */
class LanguageSeh extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'seh';
    }

    public function defaultTerritory(): TerritoryMz
    {
        return new TerritoryMz();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
