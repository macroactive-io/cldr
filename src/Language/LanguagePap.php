<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\Territory029;

/**
 * Class LanguagePap - Representation of the Papiamentu language.
 */
class LanguagePap extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'pap';
    }

    public function defaultTerritory()
    {
        return new Territory029();
    }

    public function pluralRule()
    {
        return new PluralRule1();
    }
}
