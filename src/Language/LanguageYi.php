<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptHebr;

/**
 * Yiddish
 *
 * @psalm-immutable
 */
class LanguageYi extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'yi';
    }

    public function defaultScript(): ScriptHebr
    {
        return new ScriptHebr();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
