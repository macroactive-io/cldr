<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Shavian (Shaw)
 *
 * @psalm-immutable
 */
class ScriptShaw extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Shaw';
    }

    public function number(): string
    {
        return '281';
    }

    public function unicodeName(): string
    {
        return 'Shavian';
    }
}
