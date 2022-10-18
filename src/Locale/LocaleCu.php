<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageCu;
use Macroactive\Cldr\Language\LanguageInterface;

/**
 * Class LocaleCu - Old Church Slavonic
 * @psalm-immutable
 */
class LocaleCu extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'церковнослове́нскїй';
    }

    public function endonymSortable(): string
    {
        return 'ЦЕРКОВНОСЛОВЕ́НСКЇЙ';
    }

    public function language(): LanguageInterface
    {
        return new LanguageCu();
    }

    public function numberSymbols(): array
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
