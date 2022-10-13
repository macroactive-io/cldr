<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule4;
use Fisharebest\Localization\Territory\TerritoryGb;

/**
 * Class LanguageGd - Representation of the Scottish Gaelic language.
 * @psalm-immutable
 */
class LanguageGd extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'gd';
    }

    public function defaultTerritory(): TerritoryGb
    {
        return new TerritoryGb();
    }

    public function pluralRule(): PluralRule4
    {
        return new PluralRule4();
    }
}
