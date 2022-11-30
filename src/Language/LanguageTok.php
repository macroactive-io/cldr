<?php

namespace Macroactive\Cldr\Language;

/**
 * Class LanguageEn - Representation of the Toki Pona language.
 *
* @psalm-immutable
 */
class LanguageTok extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'tok';
    }
}
