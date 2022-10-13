<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Territory\TerritoryMy;

/**
 * Class LanguageMs - Representation of the Malay language.
 * @psalm-immutable
 */
class LanguageMs extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'ms';
    }

    public function defaultTerritory(): TerritoryMy
    {
        return new TerritoryMy();
    }

    public function pluralRule(): PluralRule0
    {
        return new PluralRule0();
    }
}
