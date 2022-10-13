<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryNl;

/**
 * Class LanguageNl - Representation of the Dutch language.
 * @psalm-immutable
 */
class LanguageNl extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'nl';
    }

    public function defaultTerritory(): TerritoryNl
    {
        return new TerritoryNl();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
