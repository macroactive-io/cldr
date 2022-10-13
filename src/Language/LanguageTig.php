<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptEthi;
use Fisharebest\Localization\Territory\TerritoryEr;

/**
 * Class LanguageTif - Representation of the Tigre language.
 * @psalm-immutable
 */
class LanguageTig extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'tig';
    }

    public function defaultScript(): ScriptEthi
    {
        return new ScriptEthi();
    }

    public function defaultTerritory(): TerritoryEr
    {
        return new TerritoryEr();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
