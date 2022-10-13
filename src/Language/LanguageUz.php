<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryUz;

/**
 * Class LanguageUz - Representation of the Uzbek language.
 * @psalm-immutable
 */
class LanguageUz extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'uz';
    }

    public function defaultTerritory(): TerritoryUz
    {
        return new TerritoryUz();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
