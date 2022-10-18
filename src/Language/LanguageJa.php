<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule0;
use Macroactive\Cldr\Script\ScriptJpan;
use Macroactive\Cldr\Territory\TerritoryJp;

/**
 * Class LanguageJa - Representation of the Japanese language.
 * @psalm-immutable
 */
class LanguageJa extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'ja';
    }

    public function defaultScript(): ScriptJpan
    {
        return new ScriptJpan();
    }

    public function defaultTerritory(): TerritoryJp
    {
        return new TerritoryJp();
    }

    public function pluralRule(): PluralRule0
    {
        return new PluralRule0();
    }
}
