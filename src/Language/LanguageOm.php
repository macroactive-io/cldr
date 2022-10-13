<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryEt;

/**
 * Class LanguageOm - Representation of the Oromo language.
 * @psalm-immutable
 */
class LanguageOm extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'om';
    }

    public function defaultTerritory(): TerritoryEt
    {
        return new TerritoryEt();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
