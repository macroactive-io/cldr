<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptCyrl;
use Macroactive\Cldr\Territory\TerritoryBg;

/**
 * Class LanguageBg - Representation of the Bulgarian language.
 * @psalm-immutable
 */
class LanguageBg extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'bg';
    }

    public function defaultScript(): ScriptCyrl
    {
        return new ScriptCyrl();
    }

    public function defaultTerritory(): TerritoryBg
    {
        return new TerritoryBg();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
