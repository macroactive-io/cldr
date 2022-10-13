<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageMk;

/**
 * Class LocaleMk - Macedonian
 * @psalm-immutable
 */
class LocaleMk extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'македонски';
    }

    public function endonymSortable(): string
    {
        return 'МАКЕДОНСКИ';
    }

    public function language(): LanguageInterface
    {
        return new LanguageMk();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }
}
