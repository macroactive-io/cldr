<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Cypro-Minoan
 *
 * @psalm-immutable
 */
class ScriptCpmn extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Cpmn';
    }

    public function number(): string
    {
        return '402';
    }

    public function unicodeName(): string
    {
        return 'Cypro_Minoan';
    }
}
