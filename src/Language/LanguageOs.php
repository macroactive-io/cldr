<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryRu;

/**
 * Class LanguageOs - Representation of the Ossetian language.
 * @psalm-immutable
 */
class LanguageOs extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'os';
    }

    public function defaultTerritory(): TerritoryRu
    {
        return new TerritoryRu();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
