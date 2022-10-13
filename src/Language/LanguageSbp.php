<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Territory\TerritoryTz;

/**
 * Class LanguageSbp - Representation of the Sangu (Tanzania) language.
 */
class LanguageSbp extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'sbp';
    }

    public function defaultTerritory()
    {
        return new TerritoryTz();
    }
}
