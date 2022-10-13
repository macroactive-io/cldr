<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageTn;

/**
 * Class LocaleTn - Tswana
 * @psalm-immutable
 */
class LocaleTn extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Setswana';
    }

    public function endonymSortable(): string
    {
        return 'SETSWANA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageTn();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP => self::NBSP,
        ];
    }
}
