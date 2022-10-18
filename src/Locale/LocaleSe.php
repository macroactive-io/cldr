<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageSe;

/**
 * Class LocaleSe - Northern Sami
 * @psalm-immutable
 */
class LocaleSe extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'davvisámegiella';
    }

    public function endonymSortable(): string
    {
        return 'DAVVISAMEGIELLA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageSe();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP    => self::NBSP,
            self::DECIMAL  => self::COMMA,
            self::NEGATIVE => self::MINUS_SIGN,
        ];
    }

    protected function percentFormat(): string
    {
        return self::PLACEHOLDER . self::NBSP . self::PERCENT;
    }
}
