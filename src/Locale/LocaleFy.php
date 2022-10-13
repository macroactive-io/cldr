<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageFy;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleFy - Western Frisian
 * @psalm-immutable
 */
class LocaleFy extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Frysk';
    }

    public function endonymSortable(): string
    {
        return 'FRYSK';
    }

    public function language(): LanguageInterface
    {
        return new LanguageFy();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }
}
