<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Script\ScriptCyrl;
use Fisharebest\Localization\Territory\TerritoryRu;

/**
 * Class LanguageTt - Representation of the Tatar language.
 * @psalm-immutable
 */
class LanguageTt extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'tt';
    }

    public function defaultScript(): ScriptCyrl
    {
        return new ScriptCyrl();
    }

    public function defaultTerritory(): TerritoryRu
    {
        return new TerritoryRu();
    }

    public function pluralRule(): PluralRule0
    {
        return new PluralRule0();
    }
}
