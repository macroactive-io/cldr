<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageKkj;

/**
 * Class LocaleKkj - Kako
 * @psalm-immutable
 */
class LocaleKkj extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'kakɔ';
    }

    public function endonymSortable(): string
    {
        return 'KAKO';
    }

    public function language(): LanguageInterface
    {
        return new LanguageKkj();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }
}
