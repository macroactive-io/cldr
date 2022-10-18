<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;

/**
 * Class LanguageEo - Representation of the Esperanto language.
 * @psalm-immutable
 */
class LanguageEo extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'eo';
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
