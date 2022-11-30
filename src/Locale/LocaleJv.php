<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageJv;

/**
 * Javanese
 *
 * @psalm-immutable
 */
class LocaleJv extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Jawa';
    }

    public function language(): LanguageInterface
    {
        return new LanguageJv();
    }

    protected function numberSymbols(): array
    {
        return [
            self::DECIMAL => self::COMMA,
            self::GROUP   => self::DOT,
        ];
    }
}
