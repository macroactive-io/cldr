<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageMdf;

/**
 * Class LocaleMdf - Moksha
 *
 * @psalm-immutable
 */
class LocaleMdf extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'мокшень кяль';
    }

    public function endonymSortable(): string
    {
        return 'МОКШЕНЬ КЯЛЬ';
    }

    public function language(): LanguageMdf
    {
        return new LanguageMdf();
    }
}
