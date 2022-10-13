<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptGran - Representation of the Grantha script.
 */
class ScriptGran extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Gran';
    }

    public function number()
    {
        return '343';
    }

    public function unicodeName()
    {
        return 'Grantha';
    }
}
