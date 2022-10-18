<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageCe;
use Macroactive\Cldr\Language\LanguageInterface;

/**
 * Class LocaleCe - Chechen
 * @psalm-immutable
 */
class LocaleCe extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'нохчийн';
    }

    public function endonymSortable(): string
    {
        return 'НОХЧИЙН';
    }

    public function language(): LanguageInterface
    {
        return new LanguageCe();
    }

    protected function percentFormat(): string
    {
        return self::PLACEHOLDER . self::NBSP . self::PERCENT;
    }
}
