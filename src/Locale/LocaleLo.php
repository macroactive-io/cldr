<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageLo;

/**
 * Lao
 *
 * @psalm-immutable
 */
class LocaleLo extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'ລາວ';
    }

    public function language(): LanguageInterface
    {
        return new LanguageLo();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }
}
