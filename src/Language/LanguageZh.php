<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Script\ScriptHans;
use Fisharebest\Localization\Territory\TerritoryCn;

/**
 * Class LanguageZh - Representation of the Chinese language.
 * @psalm-immutable
 */
class LanguageZh extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'zh';
    }

    public function defaultTerritory(): TerritoryCn
    {
        return new TerritoryCn();
    }

    public function defaultScript(): ScriptHans
    {
        return new ScriptHans();
    }

    public function pluralRule(): PluralRule0
    {
        return new PluralRule0();
    }
}
