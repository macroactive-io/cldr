<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Territory\TerritoryUs;

/**
 * Cherokee
 *
 * @psalm-immutable
 */
class LanguageChr extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Cherokee';
    }

    public function code(): string
    {
        return 'chr';
    }

    public function defaultTerritory(): TerritoryUs
    {
        return new TerritoryUs();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
