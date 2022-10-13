<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryKg;

/**
 * Class LanguageKy - Representation of the Kirghiz language.
 * @psalm-immutable
 */
class LanguageKy extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'ky';
    }

    public function defaultTerritory(): TerritoryKg
    {
        return new TerritoryKg();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
