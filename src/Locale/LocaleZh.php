<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageZh;

/**
 * Chinese
 *
 * @psalm-immutable
 */
class LocaleZh extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return '中文';
    }

    public function language(): LanguageInterface
    {
        return new LanguageZh();
    }
}
