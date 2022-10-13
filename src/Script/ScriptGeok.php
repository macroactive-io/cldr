<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptGeok - Representation of the Khutsuri (Asomtavruli and Nuskhuri) script.
 */
class ScriptGeok extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Geok';
    }

    public function number()
    {
        return '241';
    }

    public function unicodeName()
    {
        return 'Georgian';
    }
}
