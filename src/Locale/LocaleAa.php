<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageAa;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleAa - Afar
 * @psalm-immutable
 */
class LocaleAa extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Qafar';
    }

    public function endonymSortable(): string
    {
        return 'QAFAR';
    }

    public function language(): LanguageInterface
    {
        return new LanguageAa();
    }
}
