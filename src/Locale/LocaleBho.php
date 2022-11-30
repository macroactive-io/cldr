<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageBho;
use Macroactive\Cldr\Language\LanguageInterface;

/**
 * Class LocaleBho - Bhojpuri
 
 * @psalm-immutable
 */
class LocaleBho extends AbstractLocale implements LocaleInterface
{
    protected function digitsGroup(): int
    {
        return 2;
    }

    public function endonym(): string
    {
        return 'भोजपुरी';
    }

    public function endonymSortable(): string
    {
        return 'भोजपुरी';
    }

    public function language(): LanguageInterface
    {
        return new LanguageBho();
    }
}
