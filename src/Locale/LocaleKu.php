<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageKu;

/**
 * Class LocaleKu - Kurdish
 * @psalm-immutable
 */
class LocaleKu extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'kurdî';
    }

    public function endonymSortable(): string
    {
        return 'KURDI';
    }

    public function language(): LanguageInterface
    {
        return new LanguageKu();
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
        return self::PERCENT . '%s';
    }
}
