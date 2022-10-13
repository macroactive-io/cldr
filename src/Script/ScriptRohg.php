<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptRunr - Representation of the Hanifi Rohingya script.
 * @psalm-immutable
 */
class ScriptRohg extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Rohg';
    }

    public function number(): string
    {
        return '167';
    }

    public function unicodeName(): string
    {
        return 'Hanifi_Rohingya';
    }
}
