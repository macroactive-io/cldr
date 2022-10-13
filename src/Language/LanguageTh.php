<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Script\ScriptThai;
use Fisharebest\Localization\Territory\TerritoryTh;

/**
 * Class LanguageTh - Representation of the Thai language.
 * @psalm-immutable
 */
class LanguageTh extends AbstractLanguage implements LanguageInterface
{
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
