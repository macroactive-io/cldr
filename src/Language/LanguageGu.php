<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Script\ScriptGujr;
use Fisharebest\Localization\Territory\TerritoryIn;

/**
 * Class LanguageGu - Representation of the Gujarati language.
 * @psalm-immutable
 */
class LanguageGu extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'gu';
    }

    public function defaultScript(): ScriptGujr
    {
        return new ScriptGujr();
    }

    public function defaultTerritory(): TerritoryIn
    {
        return new TerritoryIn();
    }

    public function pluralRule(): PluralRule2
    {
        return new PluralRule2();
    }
}
