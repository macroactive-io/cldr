<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptGeor;
use Fisharebest\Localization\Territory\TerritoryGe;

/**
 * Class LanguageKa - Representation of the Georgian language.
 * @psalm-immutable
 */
class LanguageKa extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'ka';
    }

    public function defaultScript(): ScriptGeor
    {
        return new ScriptGeor();
    }

    public function defaultTerritory(): TerritoryGe
    {
        return new TerritoryGe();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
