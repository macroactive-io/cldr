<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Script\ScriptGuru;
use Fisharebest\Localization\Territory\TerritoryIn;

/**
 * Class LanguagePa - Representation of the Panjabi language.
 * @psalm-immutable
 */
class LanguagePa extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'pa';
    }

    public function defaultScript(): ScriptGuru
    {
        return new ScriptGuru();
    }

    public function defaultTerritory(): TerritoryIn
    {
        return new TerritoryIn();
    }

    public function pluralRule(): PluralRule2
    {
        return new PluralRule2();
    }
}
