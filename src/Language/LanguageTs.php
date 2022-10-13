<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryZa;

/**
 * Class LanguageTs - Representation of the Tsonga language.
 * @psalm-immutable
 */
class LanguageTs extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'ts';
    }

    public function defaultTerritory(): TerritoryZa
    {
        return new TerritoryZa();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
