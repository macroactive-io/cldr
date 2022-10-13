<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageJbo;

/**
 * Class LocalePap - Lojban
 * @psalm-immutable
 */
class LocaleJbo extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Lojban';
    }

    public function endonymSortable(): string
    {
        return 'LOJBAN';
    }

    public function language(): LanguageInterface
    {
        return new LanguageJbo();
    }
}
