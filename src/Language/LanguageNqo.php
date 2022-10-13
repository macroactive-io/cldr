<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Script\ScriptNkoo;
use Fisharebest\Localization\Territory\TerritoryGn;

/**
 * Class LanguageNqo - Representation of the N’Ko language.
 */
class LanguageNqo extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'nqo';
    }

    public function defaultScript()
    {
        return new ScriptNkoo();
    }

    public function defaultTerritory()
    {
        return new TerritoryGn();
    }

    public function pluralRule()
    {
        return new PluralRule0();
    }
}
