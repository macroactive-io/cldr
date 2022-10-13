<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryIt;

/**
 * Class LanguageFur - Representation of the Friulian language.
 * @psalm-immutable
 */
class LanguageFur extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'fur';
    }

    public function defaultTerritory(): TerritoryIt
    {
        return new TerritoryIt();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
