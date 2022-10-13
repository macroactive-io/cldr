<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryZw;

/**
 * Class LanguageNd - Representation of the North Ndebele language.
 * @psalm-immutable
 */
class LanguageNd extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'nd';
    }

    public function defaultTerritory(): TerritoryZw
    {
        return new TerritoryZw();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
