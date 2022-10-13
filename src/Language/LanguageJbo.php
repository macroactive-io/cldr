<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule0;

/**
 * Class LanguageJbo - Representation of the Lojban language.
 */
class LanguageJbo extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'jbo';
    }

    public function pluralRule()
    {
        return new PluralRule0();
    }
}
