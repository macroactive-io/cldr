<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptDsrt - Representation of the Deseret (Mormon) script.
 * @psalm-immutable
 */
class ScriptDsrt extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Dsrt';
    }

    public function number(): string
    {
        return '250';
    }

    public function unicodeName(): string
    {
        return 'Deseret';
    }
}
