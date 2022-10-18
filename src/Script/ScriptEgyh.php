<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Egyptian hieratic
 *
 * @psalm-immutable
 */
class ScriptEgyh extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Egyh';
    }

    public function number(): string
    {
        return '060';
    }
}
