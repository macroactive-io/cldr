<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageLo;

/**
 * Class LocaleLo - Lao
 * @psalm-immutable
 */
class LocaleLo extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'ລາວ';
    }

    public function language(): LanguageInterface
    {
        return new LanguageLo();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }
}
