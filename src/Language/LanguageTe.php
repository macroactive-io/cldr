<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptTelu;
use Fisharebest\Localization\Territory\TerritoryIn;

/**
 * Class LanguageTe - Representation of the Telugu language.
 * @psalm-immutable
 */
class LanguageTe extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'te';
    }

    public function defaultScript(): ScriptTelu
    {
        return new ScriptTelu();
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
