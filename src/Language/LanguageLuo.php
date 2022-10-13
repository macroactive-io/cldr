<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Territory\TerritoryKe;

/**
 * Class LanguageLuo - Representation of the Luo (Kenya and Tanzania) language.
 */
class LanguageLuo extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'luo';
    }

    public function defaultTerritory()
    {
        return new TerritoryKe();
    }
}
