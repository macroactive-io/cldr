<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryMn;

/**
 * Class LanguageMn - Representation of the Mongolian language.
 * @psalm-immutable
 */
class LanguageMn extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'mn';
    }

    public function defaultTerritory(): TerritoryMn
    {
        return new TerritoryMn();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
