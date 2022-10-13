<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageBe;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleBe - Belarusian
 * @psalm-immutable
 */
class LocaleBe extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'беларуская';
    }

    public function endonymSortable(): string
    {
        return 'БЕЛАРУСКАЯ';
    }

    public function language(): LanguageInterface
    {
        return new LanguageBe();
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
