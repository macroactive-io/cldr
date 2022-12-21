<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule2;
use Macroactive\Cldr\Script\ScriptGujr;
use Macroactive\Cldr\Territory\TerritoryIn;

/**
 * Gujarati
 *
 * @psalm-immutable
 */
class LanguageGu extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Gujarati';
    }

    public function code(): string
    {
        return 'gu';
    }

    public function defaultScript(): ScriptGujr
    {
        return new ScriptGujr();
    }

    public function defaultTerritory(): TerritoryIn
    {
        return new TerritoryIn();
    }

    public function pluralRule(): PluralRule2
    {
        return new PluralRule2();
    }
}
