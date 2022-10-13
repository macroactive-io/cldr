<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;

/**
 * Class LanguageVo - Representation of the Volapük language.
 */
class LanguageVo extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'vo';
    }

    public function pluralRule()
    {
        return new PluralRule1();
    }
}
