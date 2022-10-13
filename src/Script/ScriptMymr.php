<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptMymr - Representation of the Myanmar script.
 */
class ScriptMymr extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Mymr';
    }

    public function numerals()
    {
        return ['၀', '၁', '၂', '၃', '၄', '၅', '၆', '၇', '၈', '၉'];
    }

    public function number()
    {
        return '350';
    }

    public function unicodeName()
    {
        return 'Myanmar';
    }
}
