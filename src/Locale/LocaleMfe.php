<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageMfe;

/**
 * Morisyen
 *
 * @psalm-immutable
 */
class LocaleMfe extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'kreol morisien';
    }

    public function endonymSortable(): string
    {
        return 'KREOL MORISIEN';
    }

    public function language(): LanguageInterface
    {
        return new LanguageMfe();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP => self::NBSP,
        ];
    }
}
