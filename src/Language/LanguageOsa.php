<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule0;

/**
 * @psalm-immutable
 */
class LanguageOsa extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Osage';
    }

    public function code(): string
    {
        return 'osa';
    }

    public function pluralRule(): PluralRule0
    {
        return new PluralRule0();
    }
}
