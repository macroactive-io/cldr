<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptElba - Representation of the Elbasan script.
 */
class ScriptElba extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Elba';
    }

    public function number()
    {
        return '226';
    }

    public function unicodeName()
    {
        return 'Elbasan';
    }
}
