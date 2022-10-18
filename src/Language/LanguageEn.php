<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;

/**
 * English
 *
 * @psalm-immutable
 */
class LanguageEn extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'en';
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
