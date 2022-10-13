<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageXh;

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
