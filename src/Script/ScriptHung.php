<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Old Hungarian (Hungarian Runic)
 *
 * @psalm-immutable
 */
class ScriptHung extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Hung';
    }

    public function number(): string
    {
        return '176';
    }

    public function unicodeName(): string
    {
        return 'Old_Hungarian';
    }
}
