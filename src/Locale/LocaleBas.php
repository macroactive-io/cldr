<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageBas;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleBas - Basaa
 * @psalm-immutable
 */
class LocaleBas extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Ɓàsàa';
    }

    public function endonymSortable(): string
    {
        return 'BASAA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageBas();
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
