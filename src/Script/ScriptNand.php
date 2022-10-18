<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Class ScriptNand - Representation of the Nandinagari script.
 * @psalm-immutable
 */
class ScriptNand extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Nand';
    }

    public function number(): string
    {
        return '311';
    }

    public function unicodeName(): string
    {
        return 'Nandinagari';
    }
}
