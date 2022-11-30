<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageSc;

/**
 * Class LocaleSc - Sardinian
 * @psalm-immutable
 */
class LocaleSc extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'sardu';
    }

    public function endonymSortable(): string
    {
        return 'SARDU';
    }

    public function language(): LanguageSc
    {
        return new LanguageSc();
    }

    protected function numberSymbols(): array
    {
        return array(
            self::DECIMAL => self::COMMA,
            self::GROUP   => self::DOT,
        );
    }
}
