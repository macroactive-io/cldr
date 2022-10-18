<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Lydian
 *
 * @psalm-immutable
 */
class ScriptLydi extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Lydi';
    }

    public function number(): string
    {
        return '116';
    }

    public function unicodeName(): string
    {
        return 'Lydian';
    }
}
