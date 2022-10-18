<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Class ScriptAraf - Representation of the Afaka script.
 * @psalm-immutable
 */
class ScriptAfak extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Afak';
    }

    public function number(): string
    {
        return '439';
    }
}
