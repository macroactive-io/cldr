<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageRn;

/**
 * Class LocaleRn - Rundi
 * @psalm-immutable
 */
class LocaleRn extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Ikirundi';
    }

    public function endonymSortable(): string
    {
        return 'IKIRUNDI';
    }

    public function language(): LanguageInterface
    {
        return new LanguageRn();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }

    protected function percentFormat(): string
    {
        return self::PLACEHOLDER . self::NBSP . self::PERCENT;
    }
}
