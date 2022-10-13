<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Territory\TerritoryFr;

/**
 * Class LanguageOc - Representation of the Occitan language.
 * @psalm-immutable
 */
class LanguageOc extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'oc';
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
