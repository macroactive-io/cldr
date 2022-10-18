<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;

/**
 * Ido
 *
 * @psalm-immutable
 */
class LanguageIo extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'io';
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
