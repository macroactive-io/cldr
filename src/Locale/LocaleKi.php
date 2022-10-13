<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageKi;

/**
 * Class LocaleKi - Kikuyu
 * @psalm-immutable
 */
class LocaleKi extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Gikuyu';
    }

    public function endonymSortable(): string
    {
        return 'GIKUYU';
    }

    public function language(): LanguageInterface
    {
        return new LanguageKi();
    }
}
