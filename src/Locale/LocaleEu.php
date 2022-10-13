<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageEu;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleEu - Basque
 * @psalm-immutable
 */
class LocaleEu extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'euskara';
    }

    public function endonymSortable(): string
    {
        return 'EUSKARA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageEu();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP    => self::DOT,
            self::DECIMAL  => self::COMMA,
            self::NEGATIVE => self::MINUS_SIGN,
        ];
    }

    protected function percentFormat(): string
    {
        return self::PERCENT . self::NBSP . '%s';
    }
}
