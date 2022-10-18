<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Unified Canadian Aboriginal Syllabics
 *
 * @psalm-immutable
 */
class ScriptCans extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Cans';
    }

    public function number(): string
    {
        return '440';
    }

    public function unicodeName(): string
    {
        return 'Canadian_Aboriginal';
    }
}
