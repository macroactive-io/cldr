<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Territory\TerritoryKe;

/**
 * Class LanguageKam - Representation of the Kamba (Kenya) language.
 */
class LanguageKam extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'kam';
    }

    public function defaultTerritory()
    {
        return new TerritoryKe();
    }
}
