<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule9;
use Fisharebest\Localization\Territory\TerritoryPl;

/**
 * Class LanguagePl - Representation of the Polish language.
 * @psalm-immutable
 */
class LanguagePl extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'pl';
    }

    public function defaultTerritory(): TerritoryPl
    {
        return new TerritoryPl();
    }

    public function pluralRule(): PluralRule9
    {
        return new PluralRule9();
    }
}
