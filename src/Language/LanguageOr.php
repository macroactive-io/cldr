<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptOrya;
use Fisharebest\Localization\Territory\TerritoryIn;

/**
 * Class LanguageOr - Representation of the Oriya language.
 * @psalm-immutable
 */
class LanguageOr extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'or';
    }

    public function defaultScript(): ScriptOrya
    {
        return new ScriptOrya();
    }

    public function defaultTerritory(): TerritoryIn
    {
        return new TerritoryIn();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
