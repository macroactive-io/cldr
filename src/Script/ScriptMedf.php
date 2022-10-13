<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptCpmn - Representation of the Medefaidrin script.
 */
class ScriptMedf extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Medf';
    }

    public function number()
    {
        return '265';
    }

    public function unicodeName()
    {
        return 'Medefaidrin';
    }
}
