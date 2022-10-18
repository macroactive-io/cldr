<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageId;
use Macroactive\Cldr\Language\LanguageInterface;

/**
 * Class LocaleId - Indonesian
 * @psalm-immutable
 */
class LocaleId extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Indonesia';
    }

    public function endonymSortable(): string
    {
        return 'INDONESIA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageId();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }
}
