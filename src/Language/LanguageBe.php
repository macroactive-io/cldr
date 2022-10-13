<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule7;
use Fisharebest\Localization\Script\ScriptCyrl;
use Fisharebest\Localization\Territory\TerritoryBy;

/**
 * Class LanguageBe - Representation of the Belarusian language.
 * @psalm-immutable
 */
class LanguageBe extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'be';
    }

    public function defaultScript(): ScriptCyrl
    {
        return new ScriptCyrl();
    }

    public function defaultTerritory(): TerritoryBy
    {
        return new TerritoryBy();
    }

    public function pluralRule(): PluralRule7
    {
        return new PluralRule7();
    }
}
