<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;

/**
 * Interlingua (International Auxiliary AbstractLanguage
 *
 * @psalm-immutable
 */
class LanguageIa extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Interlingua (International Auxiliary Language Association)';
    }

    public function code(): string
    {
        return 'ia';
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
