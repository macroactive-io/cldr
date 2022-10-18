<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Code for uncoded script
 *
 * @psalm-immutable
 */
class ScriptZzzz extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Zzzz';
    }

    public function number(): string
    {
        return '999';
    }

    public function unicodeName(): string
    {
        return 'Unknown';
    }
}
