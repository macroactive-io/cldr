<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptSamr - Representation of the Samaritan script.
 */
class ScriptSamr extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Samr';
    }

    public function number()
    {
        return '123';
    }

    public function unicodeName()
    {
        return 'Samaritan';
    }
}
