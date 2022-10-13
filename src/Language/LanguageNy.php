<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryMw;

/**
 * Class LanguageNy - Representation of the Chewa language.
 * @psalm-immutable
 */
class LanguageNy extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'ny';
    }

    public function defaultTerritory(): TerritoryMw
    {
        return new TerritoryMw();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
