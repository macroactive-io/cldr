<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageQu;

/**
 * Class LocaleQu - Quechua
 * @psalm-immutable
 */
class LocaleQu extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Runasimi';
    }

    public function endonymSortable(): string
    {
        return 'RUNASIMI';
    }

    public function language(): LanguageInterface
    {
        return new LanguageQu();
    }

    protected function percentFormat(): string
    {
        return self::PLACEHOLDER . self::NBSP . self::PERCENT;
    }
}
