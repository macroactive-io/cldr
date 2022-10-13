<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptDeva;
use Fisharebest\Localization\Territory\TerritoryNp;

/**
 * Class LanguageNe - Representation of the Nepali language.
 * @psalm-immutable
 */
class LanguageNe extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'ne';
    }

    public function defaultScript(): ScriptDeva
    {
        return new ScriptDeva();
    }

    public function defaultTerritory(): TerritoryNp
    {
        return new TerritoryNp();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
