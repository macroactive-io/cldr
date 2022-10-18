<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule0;
use Macroactive\Cldr\Script\ScriptCyrl;
use Macroactive\Cldr\Territory\TerritoryRu;

/**
 * Tatar
 *
 * @psalm-immutable
 */
class LanguageTt extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'tt';
    }

    public function defaultScript(): ScriptCyrl
    {
        return new ScriptCyrl();
    }

    public function defaultTerritory(): TerritoryRu
    {
        return new TerritoryRu();
    }

    public function pluralRule(): PluralRule0
    {
        return new PluralRule0();
    }
}
