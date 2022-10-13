<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageSms;

/**
 * Class LocaleSms
 * @psalm-immutable
 */
class LocaleSms extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'sääʹmǩiõll';
    }

    public function endonymSortable(): string
    {
        return 'SAA MKIOLL';
    }

    public function language(): LanguageInterface
    {
        return new LanguageSms();
    }
}
