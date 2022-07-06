<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\Territory029;

/**
 * Class LanguagePap - Representation of the Papiamentu language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
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
