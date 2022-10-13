<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;

/**
 * Class LanguageIo - Representation of the Ido language.
 */
class LanguageIo extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'io';
    }

    public function pluralRule()
    {
        return new PluralRule1();
    }
}
