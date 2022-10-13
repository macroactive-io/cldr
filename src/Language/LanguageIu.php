<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRuleOneTwoOther;
use Fisharebest\Localization\Script\ScriptCans;
use Fisharebest\Localization\Territory\TerritoryCa;

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
