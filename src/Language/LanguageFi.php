<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Territory\TerritoryFi;

/**
 * Finnish
 *
 * @psalm-immutable
 */
class LanguageFi extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Finnish';
    }

    public function code(): string
    {
        return 'fi';
    }

    public function defaultTerritory(): TerritoryFi
    {
        return new TerritoryFi();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
