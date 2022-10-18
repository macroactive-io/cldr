<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptEthi;
use Macroactive\Cldr\Territory\TerritoryEr;

/**
 * Tigre
 *
 * @psalm-immutable
 */
class LanguageTig extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'tig';
    }

    public function defaultScript(): ScriptEthi
    {
        return new ScriptEthi();
    }

    public function defaultTerritory(): TerritoryEr
    {
        return new TerritoryEr();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
