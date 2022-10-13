<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageNy;

/**
 * Class LocaleNy - Chewa
 * @psalm-immutable
 */
class LocaleNy extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Chichewa';
    }

    public function endonymSortable(): string
    {
        return 'CHICHEWA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageNy();
    }
}
