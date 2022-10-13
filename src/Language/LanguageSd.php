<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptArab;
use Fisharebest\Localization\Territory\TerritoryPk;

/**
 * Class LanguageSd - Representation of the Sindhi language.
 * @psalm-immutable
 */
class LanguageSd extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'sd';
    }

    public function defaultScript(): ScriptArab
    {
        return new ScriptArab();
    }

    public function defaultTerritory(): TerritoryPk
    {
        return new TerritoryPk();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
