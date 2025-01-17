<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule0;
use Macroactive\Cldr\Script\ScriptThai;
use Macroactive\Cldr\Territory\TerritoryTh;

/**
 * Thai
 *
 * @psalm-immutable
 */
class LanguageTh extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Thai';
    }

    public function code(): string
    {
        return 'th';
    }

    public function defaultScript(): ScriptThai
    {
        return new ScriptThai();
    }

    public function defaultTerritory(): TerritoryTh
    {
        return new TerritoryTh();
    }

    public function pluralRule(): PluralRule0
    {
        return new PluralRule0();
    }
}
