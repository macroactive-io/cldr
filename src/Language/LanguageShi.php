<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRuleTachelhit;
use Fisharebest\Localization\Script\ScriptTfng;
use Fisharebest\Localization\Territory\TerritoryMa;

/**
 * Class LanguageShi - Representation of the Tachelhit language.
 * @psalm-immutable
 */
class LanguageShi extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'shi';
    }

    public function defaultScript(): ScriptTfng
    {
        return new ScriptTfng();
    }

    public function defaultTerritory(): TerritoryMa
    {
        return new TerritoryMa();
    }

    public function pluralRule(): PluralRuleTachelhit
    {
        return new PluralRuleTachelhit();
    }
}
