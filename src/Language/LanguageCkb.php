<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptArab;
use Fisharebest\Localization\Territory\TerritoryIq;

/**
 * Class LanguageKu - Representation of the Kurdish language.
 * @psalm-immutable
 */
class LanguageCkb extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'ckb';
    }

    public function defaultScript(): ScriptArab
    {
        return new ScriptArab();
    }

    public function defaultTerritory(): TerritoryIq
    {
        return new TerritoryIq();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
