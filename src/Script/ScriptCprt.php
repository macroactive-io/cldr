<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptCprt - Representation of the Cypriot script.
 */
class ScriptCprt extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Cprt';
    }

    public function number()
    {
        return '403';
    }

    public function unicodeName()
    {
        return 'Cypriot';
    }
}
