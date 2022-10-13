<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule15;
use Fisharebest\Localization\Script\ScriptCyrl;
use Fisharebest\Localization\Territory\TerritoryMk;

/**
 * Class LanguageMk - Representation of the Macedonian language.
 * @psalm-immutable
 */
class LanguageMk extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'mk';
    }

    public function defaultScript(): ScriptCyrl
    {
        return new ScriptCyrl();
    }

    public function defaultTerritory(): TerritoryMk
    {
        return new TerritoryMk();
    }

    public function pluralRule(): PluralRule15
    {
        return new PluralRule15();
    }
}
