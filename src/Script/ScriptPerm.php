<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptPerm - Representation of the Old Permic script.
 */
class ScriptPerm extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Perm';
    }

    public function number()
    {
        return '227';
    }

    public function unicodeName()
    {
        return 'Old_Permic';
    }
}
