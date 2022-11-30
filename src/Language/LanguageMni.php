<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\Script\ScriptMtei;
use Macroactive\Cldr\Territory\TerritoryIn;

/**
 * Class LanguageMai - Representation of the Meitei language.

 *
 * @psalm-immutable
 */
class LanguageMni extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'mni';
    }

    public function defaultScript(): ScriptMtei
    {
        return new ScriptMtei();
    }

    public function defaultTerritory(): TerritoryIn
    {
        return new TerritoryIn();
    }
}
