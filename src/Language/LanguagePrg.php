<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule3;

/**
 * Class LanguagePrg - Representation of the Old Prussian language.
 */
class LanguagePrg extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'prg';
    }

    public function pluralRule()
    {
        return new PluralRule3();
    }
}
