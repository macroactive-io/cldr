<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Jamo
 *
 * @psalm-immutable
 */
class ScriptJamo extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Jamo';
    }

    public function number(): string
    {
        return '284';
    }
}
