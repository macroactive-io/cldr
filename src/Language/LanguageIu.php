<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRuleOneTwoOther;
use Macroactive\Cldr\Script\ScriptCans;
use Macroactive\Cldr\Territory\TerritoryCa;

/**
 * Class LanguageEl - Representation of the Modern Greek (1453-) language.
 * @psalm-immutable
 */
class LanguageIu extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'iu';
    }

    public function defaultScript(): ScriptCans
    {
        return new ScriptCans();
    }

    public function defaultTerritory(): TerritoryCa
    {
        return new TerritoryCa();
    }

    public function pluralRule(): PluralRuleOneTwoOther
    {
        return new PluralRuleOneTwoOther();
    }
}
