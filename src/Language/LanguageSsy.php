<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryEr;

/**
 * Class LanguageSsy - Representation of the Saho language.
 * @psalm-immutable
 */
class LanguageSsy extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'ssy';
    }

    public function defaultTerritory(): TerritoryEr
    {
        return new TerritoryEr();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
