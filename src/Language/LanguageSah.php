<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Territory\TerritoryRu;

/**
 * Class LanguageSah - Representation of the Yakut language.
 * @psalm-immutable
 */
class LanguageSah extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'sah';
    }

    public function defaultTerritory(): TerritoryRu
    {
        return new TerritoryRu();
    }

    public function pluralRule(): PluralRule0
    {
        return new PluralRule0();
    }
}
