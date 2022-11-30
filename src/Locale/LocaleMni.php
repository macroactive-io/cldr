<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageMni;

/**
 * Class LocaleMni - Meitei
 *
 * @psalm-immutable
 */
class LocaleMni extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'মৈতৈলোন্';
    }

    public function endonymSortable(): string
    {
        return 'মৈতৈলোন্';
    }

    public function language(): LanguageMni
    {
        return new LanguageMni();
    }
}
