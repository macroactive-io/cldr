<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Class ScriptCari - Representation of the Carian script.
 * @psalm-immutable
 */
class ScriptCari extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Cari';
    }

    public function number(): string
    {
        return '201';
    }

    public function unicodeName(): string
    {
        return 'Carian';
    }
}
