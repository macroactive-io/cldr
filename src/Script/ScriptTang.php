<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptTang - Representation of the Tangut script.
 */
class ScriptTang extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Tang';
    }

    public function number()
    {
        return '520';
    }

    public function unicodeName()
    {
        return 'Tangut';
    }
}
