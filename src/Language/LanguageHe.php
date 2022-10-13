<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptHebr;
use Fisharebest\Localization\Territory\TerritoryIl;

/**
 * Class LanguageHe - Representation of the Hebrew language.
 * @psalm-immutable
 */
class LanguageHe extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'he';
    }

    public function defaultScript(): ScriptHebr
    {
        return new ScriptHebr();
    }

    public function defaultTerritory(): TerritoryIl
    {
        return new TerritoryIl();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
