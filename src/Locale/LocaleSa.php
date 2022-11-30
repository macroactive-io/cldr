<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageSa;

/**
 * Class LocaleSa - Sanskrit
 *
 * @psalm-immutable
 */
class LocaleSa extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'संस्कृत भाषा';
    }

    public function language(): LanguageSa
    {
        return new LanguageSa();
    }

    protected function digitsGroup(): int
    {
        return 2;
    }
}
