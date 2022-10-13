<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageOc;

/**
 * Class LocaleOc - Occitan
 * @psalm-immutable
 */
class LocaleOc extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'lenga d’òc';
    }

    public function language(): LanguageInterface
    {
        return new LanguageOc();
    }
}
