<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule0;
use Macroactive\Cldr\Script\ScriptInterface;
use Macroactive\Cldr\Script\ScriptLatn;

/**
 * @psalm-immutable
 */
class LanguageTpi extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Tok Pisin';
    }

    public function code(): string
    {
        return 'tpi';
    }

    public function defaultScript(): ScriptInterface
    {
        return new ScriptLatn();
    }

    public function pluralRule(): PluralRule0
    {
        return new PluralRule0();
    }
}
