<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptTelu - Representation of the Telugu script.
 */
class ScriptTelu extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Telu';
    }

    public function numerals()
    {
        return ['౦', '౧', '౨', '౩', '౪', '౫', '౬', '౭', '౮', '౯'];
    }

    public function number()
    {
        return '340';
    }

    public function unicodeName()
    {
        return 'Telugu';
    }
}
