<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Elbasan
 *
 * @psalm-immutable
 */
class ScriptElba extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Elba';
    }

    public function number(): string
    {
        return '226';
    }

    public function unicodeName(): string
    {
        return 'Elbasan';
    }
}
