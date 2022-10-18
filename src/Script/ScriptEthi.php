<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Class ScriptEthi - Representation of the Ethiopic script.
 * @psalm-immutable
 */
class ScriptEthi extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Ethi';
    }

    public function number(): string
    {
        return '430';
    }

    public function unicodeName(): string
    {
        return 'Ethiopic';
    }
}
