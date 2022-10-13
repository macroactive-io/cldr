<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;

/**
 * Class LanguageEn - Representation of the English language.
 */
class LanguageEn extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'en';
    }

    public function pluralRule()
    {
        return new PluralRule1();
    }
}
