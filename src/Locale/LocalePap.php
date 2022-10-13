<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguagePap;

/**
 * Class LocalePap - Papiamentu
 * @psalm-immutable
 */
class LocalePap extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Papiamentu';
    }

    public function endonymSortable(): string
    {
        return 'PAPIAMENTU';
    }

    public function language(): LanguageInterface
    {
        return new LanguagePap();
    }
}
