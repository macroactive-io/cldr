<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Caucasian Albanian
 *
 * @psalm-immutable
 */
class ScriptAghb extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Aghb';
    }

    public function number(): string
    {
        return '239';
    }

    public function unicodeName(): string
    {
        return 'Caucasian_Albanian';
    }
}
