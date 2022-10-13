<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryLu;

/**
 * Class LanguageLb - Representation of the Luxembourgish language.
 * @psalm-immutable
 */
class LanguageLb extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'lb';
    }

    public function defaultTerritory(): TerritoryLu
    {
        return new TerritoryLu();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
