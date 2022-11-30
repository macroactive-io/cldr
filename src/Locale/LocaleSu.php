<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageSu;

/**
 * @psalm-immutable
 */
class LocaleSu extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Basa Sunda';
    }

    public function language(): LanguageInterface
    {
        return new LanguageSu();
    }

    public function weekendEnd(): int
    {
        return 1;
    }

    protected function numberSymbols(): array
    {
        return [
            self::DECIMAL => self::COMMA,
            self::GROUP   => self::DOT,
        ];
    }
}
