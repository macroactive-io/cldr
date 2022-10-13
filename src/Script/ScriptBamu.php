<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptBamu - Representation of the Bamum script.
 */
class ScriptBamu extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Bamu';
    }

    public function number()
    {
        return '435';
    }

    public function unicodeName()
    {
        return 'Bamum';
    }
}
