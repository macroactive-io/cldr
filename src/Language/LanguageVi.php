<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Territory\TerritoryVn;

/**
 * Class LanguageVi - Representation of the Vietnamese language.
 * @psalm-immutable
 */
class LanguageVi extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'vi';
    }

    public function defaultTerritory(): TerritoryVn
    {
        return new TerritoryVn();
    }

    public function pluralRule(): PluralRule0
    {
        return new PluralRule0();
    }
}
