<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\Script\ScriptCyrl;
use Macroactive\Cldr\Territory\TerritoryRu;

/**
 * Class LanguageCv - Representation of the Chuvash language.

 *
 * @psalm-immutable
 */
class LanguageCv extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Chuvash';
    }

    public function code(): string
    {
        return 'cv';
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
