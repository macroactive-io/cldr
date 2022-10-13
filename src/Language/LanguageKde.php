<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Territory\TerritoryTz;

/**
 * Class LanguageKde - Representation of the Makonde language.
 * @psalm-immutable
 */
class LanguageKde extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'kde';
    }

    public function defaultTerritory(): TerritoryTz
    {
        return new TerritoryTz();
    }

    public function pluralRule(): PluralRule0
    {
        return new PluralRule0();
    }
}
