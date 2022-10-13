<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Script\ScriptLaoo;
use Fisharebest\Localization\Territory\TerritoryLa;

/**
 * Class LanguageLo - Representation of the Lao language.
 * @psalm-immutable
 */
class LanguageLo extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'lo';
    }

    public function defaultScript(): ScriptLaoo
    {
        return new ScriptLaoo();
    }

    public function defaultTerritory(): TerritoryLa
    {
        return new TerritoryLa();
    }

    public function pluralRule(): PluralRule0
    {
        return new PluralRule0();
    }
}
