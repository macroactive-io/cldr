<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageSe;

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
