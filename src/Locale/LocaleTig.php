<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageTig;

/**
 * Class LocaleTig - Tigre
 * @psalm-immutable
 */
class LocaleTig extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'ትግራይት';
    }

    public function language(): LanguageInterface
    {
        return new LanguageTig();
    }
}
