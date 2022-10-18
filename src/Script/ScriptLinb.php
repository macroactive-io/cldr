<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Linear B
 *
 * @psalm-immutable
 */
class ScriptLinb extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Linb';
    }

    public function number(): string
    {
        return '401';
    }

    public function unicodeName(): string
    {
        return 'Linear_B';
    }
}
