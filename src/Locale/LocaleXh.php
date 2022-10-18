<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageXh;

/**
 * Class LocaleXh - Xhosa
 * @psalm-immutable
 */
class LocaleXh extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'isiXhosa';
    }

    public function endonymSortable(): string
    {
        return 'XHOSA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageXh();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP => self::NBSP,
        ];
    }
}
