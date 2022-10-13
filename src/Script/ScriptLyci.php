<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptLyci - Representation of the Lycian script.
 */
class ScriptLyci extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Lyci';
    }

    public function number()
    {
        return '202';
    }

    public function unicodeName()
    {
        return 'Lycian';
    }
}
