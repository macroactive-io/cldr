<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryNo;

/**
 * Class LanguageNn - Representation of the Norwegian Nynorsk language.
 */
class LanguageNn extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'nn';
    }

    public function defaultTerritory()
    {
        return new TerritoryNo();
    }

    public function pluralRule()
    {
        return new PluralRule1();
    }
}
