<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Proto Cuneiform
 *
 * @psalm-immutable
 */
class ScriptPcun extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Pcun';
    }

    public function number(): string
    {
        return '015';
    }
}
