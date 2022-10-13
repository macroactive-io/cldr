<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Script\ScriptJava;
use Fisharebest\Localization\Territory\TerritoryId;

/**
 * Class LanguageJv - Representation of the Javanese language.
 * @psalm-immutable
 */
class LanguageJv extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'jv';
    }

    public function defaultScript(): ScriptJava
    {
        return new ScriptJava();
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
