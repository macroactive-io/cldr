<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Script\ScriptCakm;
use Fisharebest\Localization\Territory\TerritoryBd;

/**
 * Class LanguageCgg - Representation of the Chakma language.
 *
 * @TODO          Plural rules
 * @psalm-immutable
 */
class LanguageCcp extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'ccp';
    }

    public function defaultTerritory(): TerritoryBd
    {
        return new TerritoryBd();
    }

    public function defaultScript(): ScriptCakm
    {
        return new ScriptCakm();
    }

    public function pluralRule(): PluralRule0
    {
        return new PluralRule0();
    }
}
