<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptCpmn - Representation of the Masaram Gondi script.
 * @psalm-immutable
 */
class ScriptGonm extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Gonm';
    }

    public function number(): string
    {
        return '313';
    }

    public function unicodeName(): string
    {
        return 'Masaram_Gondi';
    }
}
