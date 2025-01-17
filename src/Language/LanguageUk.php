<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule7;
use Macroactive\Cldr\Script\ScriptCyrl;
use Macroactive\Cldr\Territory\TerritoryUa;

/**
 * Ukrainian
 *
 * @psalm-immutable
 */
class LanguageUk extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Ukrainian';
    }

    public function code(): string
    {
        return 'uk';
    }

    public function defaultScript(): ScriptCyrl
    {
        return new ScriptCyrl();
    }

    public function defaultTerritory(): TerritoryUa
    {
        return new TerritoryUa();
    }

    public function pluralRule(): PluralRule7
    {
        return new PluralRule7();
    }
}
