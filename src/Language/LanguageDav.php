<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Territory\TerritoryKe;

/**
 * Class LanguageDav - Representation of the Taita language.
 * @psalm-immutable
 */
class LanguageDav extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'dav';
    }

    public function defaultTerritory(): TerritoryKe
    {
        return new TerritoryKe();
    }
}
