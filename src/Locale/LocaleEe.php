<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageEe;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleEe - Ewe
 * @psalm-immutable
 */
class LocaleEe extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Eʋegbe';
    }

    public function endonymSortable(): string
    {
        return 'EWEGBE';
    }

    public function language(): LanguageInterface
    {
        return new LanguageEe();
    }
}
