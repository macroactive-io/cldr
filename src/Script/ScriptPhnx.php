<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Phoenician
 *
 * @psalm-immutable
 */
class ScriptPhnx extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Phnx';
    }

    public function number(): string
    {
        return '115';
    }

    public function unicodeName(): string
    {
        return 'Phoenician';
    }
}
