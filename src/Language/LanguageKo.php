<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule0;
use Macroactive\Cldr\Script\ScriptKore;
use Macroactive\Cldr\Territory\TerritoryKr;

/**
 * Class LanguageKo - Representation of the Korean language.
 * @psalm-immutable
 */
class LanguageKo extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'ko';
    }

    public function defaultScript(): ScriptKore
    {
        return new ScriptKore();
    }

    public function defaultTerritory(): TerritoryKr
    {
        return new TerritoryKr();
    }

    public function pluralRule(): PluralRule0
    {
        return new PluralRule0();
    }
}
