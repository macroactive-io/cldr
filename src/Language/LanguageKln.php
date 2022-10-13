<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Territory\TerritoryKe;

/**
 * Class LanguageKln - Representation of the Kalenjin language.
 */
class LanguageKln extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'kln';
    }

    public function defaultTerritory()
    {
        return new TerritoryKe();
    }
}
