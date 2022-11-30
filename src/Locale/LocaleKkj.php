<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageKkj;

/**
 * Kako
 *
 * @psalm-immutable
 */
class LocaleKkj extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'kakɔ';
    }

    public function endonymSortable(): string
    {
        return 'KAKO';
    }

    public function language(): LanguageInterface
    {
        return new LanguageKkj();
    }

    protected function numberSymbols(): array
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }
}
