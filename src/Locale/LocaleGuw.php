<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageGuw;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleFrBj
 * @psalm-immutable
 */
class LocaleGuw extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Gun';
    }

    public function endonymSortable(): string
    {
        return 'GUN';
    }

    public function language(): LanguageInterface
    {
        return new LanguageGuw();
    }
}
