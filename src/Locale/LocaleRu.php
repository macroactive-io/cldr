<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageRu;

/**
 * Russian
 *
 * @psalm-immutable
 */
class LocaleRu extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'русский';
    }

    public function endonymSortable(): string
    {
        return 'РУССКИЙ';
    }

    public function language(): LanguageInterface
    {
        return new LanguageRu();
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
