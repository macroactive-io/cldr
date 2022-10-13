<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryGb;

/**
 * Class LanguageEn - Representation of the Anglo-Saxon / Old-English language.
 * @psalm-immutable
 */
class LanguageAng extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'ang';
    }

    public function defaultTerritory(): TerritoryGb
    {
        return new TerritoryGb();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
