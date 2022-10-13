<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryDk;

/**
 * Class LanguageDa - Representation of the Danish language.
 * @psalm-immutable
 */
class LanguageDa extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'da';
    }

    public function defaultTerritory(): TerritoryDk
    {
        return new TerritoryDk();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
