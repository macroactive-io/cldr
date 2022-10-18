<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule7;
use Macroactive\Cldr\Script\ScriptCyrl;
use Macroactive\Cldr\Territory\TerritoryRu;

/**
 * Russian
 *
 * @psalm-immutable
 */
class LanguageRu extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'ru';
    }

    public function defaultScript(): ScriptCyrl
    {
        return new ScriptCyrl();
    }

    public function defaultTerritory(): TerritoryRu
    {
        return new TerritoryRu();
    }

    public function pluralRule(): PluralRule7
    {
        return new PluralRule7();
    }
}
