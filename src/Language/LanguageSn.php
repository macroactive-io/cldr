<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryZw;

/**
 * Class LanguageSn - Representation of the Shona language.
 * @psalm-immutable
 */
class LanguageSn extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'sn';
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
