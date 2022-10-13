<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryAl;

/**
 * Class LanguageSq - Representation of the Albanian language.
 * @psalm-immutable
 */
class LanguageSq extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'sq';
    }

    public function defaultTerritory(): TerritoryAl
    {
        return new TerritoryAl();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
