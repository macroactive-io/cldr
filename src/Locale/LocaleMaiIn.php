<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageMai;
use Macroactive\Cldr\Script\ScriptDeva;

/**
 * Class LocaleMaiIn - Maithili
 *
 * @psalm-immutable
 */
class LocaleMaiIn extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'मैथिली';
    }

    public function endonymSortable(): string
    {
        return 'मैथिली';
    }

    public function language(): LanguageMai
    {
        return new LanguageMai();
    }

    public function script(): ScriptDeva
    {
        return new ScriptDeva();
    }
}
