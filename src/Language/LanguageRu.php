<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule7;
use Fisharebest\Localization\Script\ScriptCyrl;
use Fisharebest\Localization\Territory\TerritoryRu;

/**
 * Class LanguageRu - Representation of the Russian language.
 * @psalm-immutable
 */
class LanguageRu extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'ru';
    }

    public function defaultScript(): ScriptCyrl
    {
        return new ScriptCyrl();
    }

    public function defaultTerritory(): TerritoryRu
    {
        return new TerritoryRu();
    }

    public function pluralRule(): PluralRule7
    {
        return new PluralRule7();
    }
}
