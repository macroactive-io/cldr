<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptCyrl;
use Macroactive\Cldr\Territory\TerritoryKz;

/**
 * Kazakh
 *
 * @psalm-immutable
 */
class LanguageKk extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Kazakh';
    }

    public function code(): string
    {
        return 'kk';
    }

    public function defaultScript(): ScriptCyrl
    {
        return new ScriptCyrl();
    }

    public function defaultTerritory(): TerritoryKz
    {
        return new TerritoryKz();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
