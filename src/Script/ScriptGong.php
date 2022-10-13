<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptCpmn - Representation of the Gunjala Gondi script.
 */
class ScriptGong extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Gong';
    }

    public function number()
    {
        return '312';
    }

    public function unicodeName()
    {
        return 'Gunjala_Gondi';
    }
}
