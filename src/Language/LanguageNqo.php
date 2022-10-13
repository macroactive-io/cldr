<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Script\ScriptNkoo;
use Fisharebest\Localization\Territory\TerritoryGn;

/**
 * Class LanguageNqo - Representation of the N’Ko language.
 * @psalm-immutable
 */
class LanguageNqo extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'nqo';
    }

    public function defaultScript(): ScriptNkoo
    {
        return new ScriptNkoo();
    }

    public function defaultTerritory(): TerritoryGn
    {
        return new TerritoryGn();
    }

    public function pluralRule(): PluralRule0
    {
        return new PluralRule0();
    }
}
