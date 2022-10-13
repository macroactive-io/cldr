<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Territory\TerritoryKe;

/**
 * Class LanguageGuz - Representation of the Gusii language.
 */
class LanguageGuz extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'guz';
    }

    public function defaultTerritory()
    {
        return new TerritoryKe();
    }
}
