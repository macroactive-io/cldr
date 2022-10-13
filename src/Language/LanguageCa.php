<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryEs;

/**
 * Class LanguageCa - Representation of the Catalan language.
 * @psalm-immutable
 */
class LanguageCa extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'ca';
    }

    public function defaultTerritory(): TerritoryEs
    {
        return new TerritoryEs();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
