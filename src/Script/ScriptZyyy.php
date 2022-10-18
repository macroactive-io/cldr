<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Code for undetermined script
 *
 * @psalm-immutable
 */
class ScriptZyyy extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Zyyy';
    }

    public function number(): string
    {
        return '998';
    }

    public function unicodeName(): string
    {
        return 'Common';
    }
}
