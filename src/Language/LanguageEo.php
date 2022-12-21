<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;

/**
 * Esperanto
 *
 * @psalm-immutable
 */
class LanguageEo extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Esperanto';
    }

    public function code(): string
    {
        return 'eo';
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
