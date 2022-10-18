<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Class ScriptLisu - Representation of the Lisu (Fraser) script.
 * @psalm-immutable
 */
class ScriptLisu extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Lisu';
    }

    public function number(): string
    {
        return '399';
    }

    public function unicodeName(): string
    {
        return 'Lisu';
    }
}
