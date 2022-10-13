<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule3;
use Fisharebest\Localization\Territory\TerritoryLv;

/**
 * Class LanguageLv - Representation of the Latvian language.
 * @psalm-immutable
 */
class LanguageLv extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'lv';
    }

    public function defaultTerritory(): TerritoryLv
    {
        return new TerritoryLv();
    }

    public function pluralRule(): PluralRule3
    {
        return new PluralRule3();
    }
}
