<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;

/**
 * Class LanguageIa - Representation of the Interlingua (International Auxiliary AbstractLanguage language.
 * @psalm-immutable
 */
class LanguageIa extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'ia';
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
