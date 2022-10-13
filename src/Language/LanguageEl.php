<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptGrek;
use Fisharebest\Localization\Territory\TerritoryGr;

/**
 * Class LanguageEl - Representation of the Modern Greek (1453-) language.
 * @psalm-immutable
 */
class LanguageEl extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'el';
    }

    public function defaultScript(): ScriptGrek
    {
        return new ScriptGrek();
    }

    public function defaultTerritory(): TerritoryGr
    {
        return new TerritoryGr();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
