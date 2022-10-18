<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Territory\Territory029;

/**
 * Papiamentu
 *
 * @psalm-immutable
 */
class LanguagePap extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'pap';
    }

    public function defaultTerritory(): Territory029
    {
        return new Territory029();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
