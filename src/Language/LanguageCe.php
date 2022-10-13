<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptCyrl;
use Fisharebest\Localization\Territory\TerritoryRu;

/**
 * Class LanguageRu - Representation of the Russian language.
 * @psalm-immutable
 */
class LanguageCe extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'ce';
    }

    public function defaultScript(): ScriptCyrl
    {
        return new ScriptCyrl();
    }

    public function defaultTerritory(): TerritoryRu
    {
        return new TerritoryRu();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
