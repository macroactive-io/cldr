<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule7;
use Fisharebest\Localization\Script\ScriptCyrl;
use Fisharebest\Localization\Territory\TerritoryUa;

/**
 * Class LanguageUk - Representation of the Ukrainian language.
 * @psalm-immutable
 */
class LanguageUk extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'uk';
    }

    public function defaultScript(): ScriptCyrl
    {
        return new ScriptCyrl();
    }

    public function defaultTerritory(): TerritoryUa
    {
        return new TerritoryUa();
    }

    public function pluralRule(): PluralRule7
    {
        return new PluralRule7();
    }
}
