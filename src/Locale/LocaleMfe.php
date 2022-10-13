<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageMfe;

/**
 * Class LocaleMfe - Morisyen
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
