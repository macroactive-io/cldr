<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule12;
use Macroactive\Cldr\Script\ScriptArab;

/**
 * Arabic
 *
 * @psalm-immutable
 */
class LanguageAr extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Arabic';
    }

    public function code(): string
    {
        return 'ar';
    }

    public function defaultScript(): ScriptArab
    {
        return new ScriptArab();
    }

    public function pluralRule(): PluralRule12
    {
        return new PluralRule12();
    }
}
