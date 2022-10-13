<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Territory\TerritoryFr;

/**
 * Class LanguageFr - Representation of the French language.
 * @psalm-immutable
 */
class LanguageFr extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'fr';
    }

    public function defaultTerritory(): TerritoryFr
    {
        return new TerritoryFr();
    }

    public function pluralRule(): PluralRule2
    {
        return new PluralRule2();
    }
}
