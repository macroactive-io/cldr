<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageSyr;

/**
 * Class LocaleSyr - Syriac
 * @psalm-immutable
 */
class LocaleSyr extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Syriac';
    }

    public function language(): LanguageInterface
    {
        return new LanguageSyr();
    }
}
