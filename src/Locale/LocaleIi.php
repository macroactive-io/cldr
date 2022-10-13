<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageIi;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleIi - Sichuan Yi
 * @psalm-immutable
 */
class LocaleIi extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'ꆈꌠꉙ';
    }

    public function language(): LanguageInterface
    {
        return new LanguageIi();
    }
}
