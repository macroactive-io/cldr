<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptCher - Representation of the Cherokee script.
 */
class ScriptCher extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Cher';
    }

    public function number()
    {
        return '445';
    }

    public function unicodeName()
    {
        return 'Cherokee';
    }
}
