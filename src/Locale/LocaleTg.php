<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageTg;

/**
 * Tajik
 *
 * @psalm-immutable
 */
class LocaleTg extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'тоҷикӣ';
    }

    public function language(): LanguageInterface
    {
        return new LanguageTg();
    }

    protected function numberSymbols(): array
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }
}
