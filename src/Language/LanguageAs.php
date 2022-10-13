<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Script\ScriptBeng;
use Fisharebest\Localization\Territory\TerritoryIn;

/**
 * Class LanguageAs - Representation of the Assamese language.
 * @psalm-immutable
 */
class LanguageAs extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'as';
    }

    public function defaultScript(): ScriptBeng
    {
        return new ScriptBeng();
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
