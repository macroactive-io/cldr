<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

/**
 * Simplified Chinese
 *
 * @psalm-immutable
 */
class LocaleZhHans extends LocaleZh
{
    public function endonym(): string
    {
        return '简体中文';
    }

    public function languageTag(): string
    {
        return 'zh-Hans';
    }
}
