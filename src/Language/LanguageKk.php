<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptCyrl;
use Fisharebest\Localization\Territory\TerritoryKz;

/**
 * Class LanguageKk - Representation of the Kazakh language.
 * @psalm-immutable
 */
class LanguageKk extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'kk';
    }

    public function defaultScript(): ScriptCyrl
    {
        return new ScriptCyrl();
    }

    public function defaultTerritory(): TerritoryKz
    {
        return new TerritoryKz();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
