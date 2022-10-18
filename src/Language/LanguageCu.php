<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptCyrl;
use Macroactive\Cldr\Territory\TerritoryRu;

/**
 * Class LanguageCu - Representation of the Old Church Slavonic language.
 * @psalm-immutable
 */
class LanguageCu extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'cu';
    }

    public function defaultScript(): ScriptCyrl
    {
        return new ScriptCyrl();
    }

    public function defaultTerritory(): TerritoryRu
    {
        return new TerritoryRu();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
