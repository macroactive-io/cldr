<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule0;
use Macroactive\Cldr\Script\ScriptSund;
use Macroactive\Cldr\Territory\TerritoryId;

/**
 * Sotho
 *
 * @psalm-immutable
 */
class LanguageSu extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Sundanese';
    }

    public function code(): string
    {
        return 'su';
    }

    public function defaultScript(): ScriptSund
    {
        return new ScriptSund();
    }

    public function defaultTerritory(): TerritoryId
    {
        return new TerritoryId();
    }

    public function pluralRule(): PluralRule0
    {
        return new PluralRule0();
    }
}
