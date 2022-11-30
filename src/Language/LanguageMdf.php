<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\Script\ScriptCyrl;
use Macroactive\Cldr\Territory\TerritoryRu;

/**
 * Class LanguageCv - Representation of the Chuvash language.
 
 * @psalm-immutable
 */
class LanguageMdf extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'mdf';
    }

    public function defaultScript(): ScriptCyrl
    {
        return new ScriptCyrl();
    }

    public function defaultTerritory(): TerritoryRu
    {
        return new TerritoryRu();
    }
}
