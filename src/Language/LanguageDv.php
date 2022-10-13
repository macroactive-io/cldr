<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptThaa;
use Fisharebest\Localization\Territory\TerritoryMv;

/**
 * Class LanguageDv - Representation of the Divehi language.
 * @psalm-immutable
 */
class LanguageDv extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'dv';
    }

    public function defaultScript(): ScriptThaa
    {
        return new ScriptThaa();
    }

    public function defaultTerritory(): TerritoryMv
    {
        return new TerritoryMv();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
