<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Territory\TerritoryGh;

/**
 * Class LanguageAk - Representation of the Akan language.
 */
class LanguageAk extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'ak';
    }

    public function defaultTerritory()
    {
        return new TerritoryGh();
    }

    public function pluralRule()
    {
        return new PluralRule2();
    }
}
