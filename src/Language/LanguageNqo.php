<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule0;
use Macroactive\Cldr\Script\ScriptNkoo;
use Macroactive\Cldr\Territory\TerritoryGn;

/**
 * N’Ko
 *
 * @psalm-immutable
 */
class LanguageNqo extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'N\'Ko';
    }

    public function code(): string
    {
        return 'nqo';
    }

    public function defaultScript(): ScriptNkoo
    {
        return new ScriptNkoo();
    }

    public function defaultTerritory(): TerritoryGn
    {
        return new TerritoryGn();
    }

    public function pluralRule(): PluralRule0
    {
        return new PluralRule0();
    }
}
