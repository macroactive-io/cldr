<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Script\ScriptDeva;
use Fisharebest\Localization\Territory\TerritoryIn;

/**
 * Class LanguageKok - Representation of the Konkani language.
 * @psalm-immutable
 */
class LanguageKok extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'kok';
    }

    public function defaultScript(): ScriptDeva
    {
        return new ScriptDeva();
    }

    public function defaultTerritory(): TerritoryIn
    {
        return new TerritoryIn();
    }
}
