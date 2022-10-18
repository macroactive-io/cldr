<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Duployan shorthand, Duployan stenography
 *
 * @psalm-immutable
 */
class ScriptDupl extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Dupl';
    }

    public function number(): string
    {
        return '755';
    }

    public function unicodeName(): string
    {
        return 'Duployan';
    }
}
