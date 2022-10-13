<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryHu;

/**
 * Class LanguageHu - Representation of the Hungarian language.
 * @psalm-immutable
 */
class LanguageHu extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'hu';
    }

    public function defaultTerritory(): TerritoryHu
    {
        return new TerritoryHu();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
