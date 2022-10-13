<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageCcp;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleCcp - Chakma
 * @psalm-immutable
 */
class LocaleCcp extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return '𑄌𑄋𑄴𑄟𑄳𑄦';
    }

    public function language(): LanguageInterface
    {
        return new LanguageCcp();
    }

    protected function digitsGroup(): int
    {
        return 2;
    }
}
