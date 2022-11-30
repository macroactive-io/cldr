<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageDoi;

/**
 * Class LocaleDoi - Dogri
 * @psalm-immutable
 */
class LocaleDoi extends AbstractLocale implements LocaleInterface
{
    protected function digitsGroup(): int
    {
        return 2;
    }

    public function endonym(): string
    {
        return 'डोगरी';
    }

    public function endonymSortable(): string
    {
        return 'डोगरी';
    }

    public function language(): LanguageDoi
    {
        return new LanguageDoi();
    }
}
