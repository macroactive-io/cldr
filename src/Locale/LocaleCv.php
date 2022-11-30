<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageCv;

/**
 * Class LocaleCv - Chuvash
 *
 * @psalm-immutable
 */
class LocaleCv extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'чӑваш';
    }

    public function endonymSortable(): string
    {
        return 'ЧӐВАШ';
    }

    public function language(): LanguageCv
    {
        return new LanguageCv();
    }

    protected function numberSymbols(): array
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }

    protected function percentFormat(): string
    {
        return self::PLACEHOLDER . self::NBSP . self::PERCENT;
    }
}
