<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Script\ScriptKore;
use Fisharebest\Localization\Territory\TerritoryKr;

/**
 * Class LanguageKo - Representation of the Korean language.
 * @psalm-immutable
 */
class LanguageKo extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'ko';
    }

    public function defaultScript(): ScriptKore
    {
        return new ScriptKore();
    }

    public function defaultTerritory(): TerritoryKr
    {
        return new TerritoryKr();
    }

    public function pluralRule(): PluralRule0
    {
        return new PluralRule0();
    }
}
