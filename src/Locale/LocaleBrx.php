<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageBrx;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleBrx - Bodo
 * @psalm-immutable
 */
class LocaleBrx extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'बड़ो';
    }

    public function language(): LanguageInterface
    {
        return new LanguageBrx();
    }

    protected function digitsGroup(): int
    {
        return 2;
    }
}
