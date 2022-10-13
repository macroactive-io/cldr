<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptSgnw - Representation of the SignWriting script.
 */
class ScriptSgnw extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Sgnw';
    }

    public function number()
    {
        return '095';
    }

    public function unicodeName()
    {
        return 'SignWriting';
    }
}
