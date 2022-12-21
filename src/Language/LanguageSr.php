<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule7;
use Macroactive\Cldr\Script\ScriptCyrl;
use Macroactive\Cldr\Territory\TerritoryRs;

/**
 * Serbian
 *
 * @psalm-immutable
 */
class LanguageSr extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Serbian';
    }

    public function code(): string
    {
        return 'sr';
    }

    public function defaultScript(): ScriptCyrl
    {
        return new ScriptCyrl();
    }

    public function defaultTerritory(): TerritoryRs
    {
        return new TerritoryRs();
    }

    public function pluralRule(): PluralRule7
    {
        return new PluralRule7();
    }
}
