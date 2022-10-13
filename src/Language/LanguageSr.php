<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule7;
use Fisharebest\Localization\Script\ScriptCyrl;
use Fisharebest\Localization\Territory\TerritoryRs;

/**
 * Class LanguageSr - Representation of the Serbian language.
 * @psalm-immutable
 */
class LanguageSr extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'sr';
    }

    public function defaultScript(): ScriptCyrl
    {
        return new ScriptCyrl();
    }

    public function defaultTerritory(): TerritoryRs
    {
        return new TerritoryRs();
    }

    public function pluralRule(): PluralRule7
    {
        return new PluralRule7();
    }
}
