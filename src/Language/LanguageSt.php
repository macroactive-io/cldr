<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryLs;

/**
 * Class LanguageEn - Representation of the Sotho language.
 * @psalm-immutable
 */
class LanguageSt extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'st';
    }

    public function defaultTerritory(): TerritoryLs
    {
        return new TerritoryLs();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
