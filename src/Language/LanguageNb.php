<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryNo;

/**
 * Class LanguageNb - Representation of the Norwegian Bokmål language.
 * @psalm-immutable
 */
class LanguageNb extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'nb';
    }

    public function defaultTerritory(): TerritoryNo
    {
        return new TerritoryNo();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
