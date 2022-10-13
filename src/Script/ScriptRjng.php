<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptRjng - Representation of the Rejang (Redjang, Kaganga) script.
 */
class ScriptRjng extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Rjng';
    }

    public function number()
    {
        return '363';
    }

    public function unicodeName()
    {
        return 'Rejang';
    }
}
