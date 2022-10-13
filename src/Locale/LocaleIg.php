<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageIg;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleIg - Igbo
 * @psalm-immutable
 */
class LocaleIg extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Igbo';
    }

    public function endonymSortable(): string
    {
        return 'IGBO';
    }

    public function language(): LanguageInterface
    {
        return new LanguageIg();
    }
}
