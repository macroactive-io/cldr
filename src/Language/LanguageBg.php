<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptCyrl;
use Fisharebest\Localization\Territory\TerritoryBg;

/**
 * Class LanguageBg - Representation of the Bulgarian language.
 * @psalm-immutable
 */
class LanguageBg extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'bg';
    }

    public function defaultScript(): ScriptCyrl
    {
        return new ScriptCyrl();
    }

    public function defaultTerritory(): TerritoryBg
    {
        return new TerritoryBg();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
