<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptVith - Representation of the Vithkuqi script.
 */
class ScriptVith extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Vith';
    }

    public function number()
    {
        return '228';
    }

    public function unicodeName()
    {
        return 'Vithkuqi';
    }
}
