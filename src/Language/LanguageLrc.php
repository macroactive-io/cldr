<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule12;
use Fisharebest\Localization\Script\ScriptArab;
use Fisharebest\Localization\Territory\TerritoryIr;

/**
 * Class LanguageLrc - Representation of the Luri language.
 * @psalm-immutable
 */
class LanguageLrc extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'lrc';
    }

    public function defaultScript(): ScriptArab
    {
        return new ScriptArab();
    }

    public function defaultTerritory(): TerritoryIr
    {
        return new TerritoryIr();
    }

    public function pluralRule(): PluralRule12
    {
        return new PluralRule12();
    }
}
