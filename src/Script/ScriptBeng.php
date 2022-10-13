<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptBeng - Representation of the Bengali script.
 */
class ScriptBeng extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Beng';
    }

    public function numerals()
    {
        return ['০', '১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯'];
    }

    public function number()
    {
        return '325';
    }

    public function unicodeName()
    {
        return 'Bengali';
    }
}
