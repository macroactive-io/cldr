<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Script\ScriptEthi;
use Fisharebest\Localization\Territory\TerritoryEt;

/**
 * Class LanguageAm - Representation of the Amharic language.
 * @psalm-immutable
 */
class LanguageAm extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'am';
    }

    public function defaultScript(): ScriptEthi
    {
        return new ScriptEthi();
    }

    public function defaultTerritory(): TerritoryEt
    {
        return new TerritoryEt();
    }

    public function pluralRule(): PluralRule2
    {
        return new PluralRule2();
    }
}
