<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptCopt - Representation of the Coptic script.
 */
class ScriptCopt extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Copt';
    }

    public function number()
    {
        return '204';
    }

    public function unicodeName()
    {
        return 'Coptic';
    }
}
