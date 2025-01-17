<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Cherokee
 *
 * @psalm-immutable
 */
class ScriptCher extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Cher';
    }

    public function number(): string
    {
        return '445';
    }

    public function unicodeName(): string
    {
        return 'Cherokee';
    }
}
