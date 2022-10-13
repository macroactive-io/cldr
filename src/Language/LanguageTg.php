<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptCyrl;
use Fisharebest\Localization\Territory\TerritoryTj;

/**
 * Class LanguageTg - Representation of the Tajik language.
 * @psalm-immutable
 */
class LanguageTg extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'tg';
    }

    public function defaultScript(): ScriptCyrl
    {
        return new ScriptCyrl();
    }

    public function defaultTerritory(): TerritoryTj
    {
        return new TerritoryTj();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
