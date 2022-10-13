<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryBw;

/**
 * Class LanguageTn - Representation of the Tswana language.
 * @psalm-immutable
 */
class LanguageTn extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'tn';
    }

    public function defaultTerritory(): TerritoryBw
    {
        return new TerritoryBw();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
