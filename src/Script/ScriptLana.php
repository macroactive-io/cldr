<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptLana - Representation of the Tai Tham (Lanna) script.
 */
class ScriptLana extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Lana';
    }

    public function numerals()
    {
        return ['᪀', '᪁', '᪂', '᪃', '᪄', '᪅', '᪆', '᪇', '᪈', '᪉'];
    }

    public function number()
    {
        return '351';
    }

    public function unicodeName()
    {
        return 'Tai_Tham';
    }
}
