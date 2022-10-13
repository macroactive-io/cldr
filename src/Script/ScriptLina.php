<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptLina - Representation of the Linear A script.
 */
class ScriptLina extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Lina';
    }

    public function number()
    {
        return '400';
    }

    public function unicodeName()
    {
        return 'Linear_A';
    }
}
