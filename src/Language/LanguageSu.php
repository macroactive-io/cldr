<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Script\ScriptSund;
use Fisharebest\Localization\Territory\TerritoryId;

/**
 * Class LanguageSu - Representation of the Sotho language.
 * @psalm-immutable
 */
class LanguageSu extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'su';
    }

    public function defaultScript(): ScriptSund
    {
        return new ScriptSund();
    }

    public function defaultTerritory(): TerritoryId
    {
        return new TerritoryId();
    }

    public function pluralRule(): PluralRule0
    {
        return new PluralRule0();
    }
}
