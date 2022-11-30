<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule0;

/**
 * Hmong Njua
 *
 * @psalm-immutable
 */
class LanguageHnj extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'hnj';
    }

    public function pluralRule(): PluralRule0
    {
        return new PluralRule0();
    }
}
