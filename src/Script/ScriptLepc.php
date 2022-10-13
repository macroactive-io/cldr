<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptLepc - Representation of the Lepcha (Róng) script.
 */
class ScriptLepc extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Lepc';
    }

    public function numerals()
    {
        return ['᱀', '᱁', '᱂', '᱃', '᱄', '᱅', '᱆', '᱇', '᱈', '᱉'];
    }

    public function number()
    {
        return '335';
    }

    public function unicodeName()
    {
        return 'Lepcha';
    }
}
