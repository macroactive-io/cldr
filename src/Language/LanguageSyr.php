<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptSyrc;
use Fisharebest\Localization\Territory\TerritoryIq;

/**
 * Class LanguageSyr - Representation of the Syriac language.
 * @psalm-immutable
 */
class LanguageSyr extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'syr';
    }

    public function defaultScript(): ScriptSyrc
    {
        return new ScriptSyrc();
    }

    public function defaultTerritory(): TerritoryIq
    {
        return new TerritoryIq();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
