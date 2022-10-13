<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptYiii - Representation of the Yi script.
 */
class ScriptYiii extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Yiii';
    }

    public function number()
    {
        return '460';
    }

    public function unicodeName()
    {
        return 'Yi';
    }
}
