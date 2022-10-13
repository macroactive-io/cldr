<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Territory\TerritoryId;

/**
 * Class LanguageId - Representation of the Indonesian language.
 */
class LanguageId extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'id';
    }

    public function defaultTerritory()
    {
        return new TerritoryId();
    }

    public function pluralRule()
    {
        return new PluralRule0();
    }
}
