<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryTz;

/**
 * Class LanguageRwk - Representation of the Rwa language.
 * @psalm-immutable
 */
class LanguageRwk extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'rwk';
    }

    public function defaultTerritory(): TerritoryTz
    {
        return new TerritoryTz();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
