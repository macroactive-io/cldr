<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageTt;

/**
 * Class LocaleTt - Tatar
 * @psalm-immutable
 */
class LocaleTt extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'татар';
    }

    public function endonymSortable(): string
    {
        return 'ТАТАР';
    }

    public function language(): LanguageInterface
    {
        return new LanguageTt();
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
