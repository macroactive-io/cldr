<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryEe;

/**
 * Class LanguageEt - Representation of the Estonian language.
 * @psalm-immutable
 */
class LanguageEt extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'et';
    }

    public function defaultTerritory(): TerritoryEe
    {
        return new TerritoryEe();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
