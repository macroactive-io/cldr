<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageLu;

/**
 * Class LocaleLu - Luba-Katanga
 * @psalm-immutable
 */
class LocaleLu extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Tshiluba';
    }

    public function endonymSortable(): string
    {
        return 'TSHILUBA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageLu();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }
}
