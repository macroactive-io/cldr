<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptTale - Representation of the Tai Le script.
 */
class ScriptTale extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Tale';
    }

    public function number()
    {
        return '353';
    }

    public function unicodeName()
    {
        return 'Tai_Le';
    }
}
