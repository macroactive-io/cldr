<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule0;
use Macroactive\Cldr\Script\ScriptCakm;
use Macroactive\Cldr\Territory\TerritoryBd;

/**
 * Chakma
 *
 * @TODO          Plural rules
 *
 * @psalm-immutable
 */
class LanguageCcp extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Chakma';
    }

    public function code(): string
    {
        return 'ccp';
    }

    public function defaultTerritory(): TerritoryBd
    {
        return new TerritoryBd();
    }

    public function defaultScript(): ScriptCakm
    {
        return new ScriptCakm();
    }

    public function pluralRule(): PluralRule0
    {
        return new PluralRule0();
    }
}
