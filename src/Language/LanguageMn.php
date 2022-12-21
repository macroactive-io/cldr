<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Territory\TerritoryMn;

/**
 * Mongolian
 *
 * @psalm-immutable
 */
class LanguageMn extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Mongolian';
    }

    public function code(): string
    {
        return 'mn';
    }

    public function defaultTerritory(): TerritoryMn
    {
        return new TerritoryMn();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
