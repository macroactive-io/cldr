<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Class ScriptArmn - Representation of the Armenian script.
 * @psalm-immutable
 */
class ScriptArmn extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Armn';
    }

    public function number(): string
    {
        return '230';
    }

    public function unicodeName(): string
    {
        return 'Armenian';
    }
}
