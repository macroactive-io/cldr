<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptTnsa - Representation of the Tangsa script.
 */
class ScriptTnsa extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Tnsa';
    }

    public function number()
    {
        return '275';
    }

    public function unicodeName()
    {
        return 'Tangsa';
    }
}
