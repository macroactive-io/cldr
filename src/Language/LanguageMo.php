<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule5;
use Fisharebest\Localization\Territory\TerritoryMd;

/**
 * Class LanguageIt - Representation of the Italian language.
 * @psalm-immutable
 */
class LanguageMo extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'mo';
    }

    public function defaultTerritory(): TerritoryMd
    {
        return new TerritoryMd();
    }

    public function pluralRule(): PluralRule5
    {
        return new PluralRule5();
    }
}
