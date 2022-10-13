<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryIn;

/**
 * Class LanguageBrx - Representation of the Bodo (India) language.
 */
class LanguageBrx extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'brx';
    }

    public function defaultTerritory()
    {
        return new TerritoryIn();
    }

    public function pluralRule()
    {
        return new PluralRule1();
    }
}
