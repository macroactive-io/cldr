<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageLu;

/**
 * Luba-Katanga
 *
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

    protected function numberSymbols(): array
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }
}
