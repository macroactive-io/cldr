<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;

/**
 * Class LanguageEo - Representation of the Esperanto language.
 */
class LanguageEo extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'eo';
    }

    public function pluralRule()
    {
        return new PluralRule1();
    }
}
