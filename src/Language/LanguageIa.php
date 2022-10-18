<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;

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
