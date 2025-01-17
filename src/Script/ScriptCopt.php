<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Coptic
 *
 * @psalm-immutable
 */
class ScriptCopt extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Copt';
    }

    public function number(): string
    {
        return '204';
    }

    public function unicodeName(): string
    {
        return 'Coptic';
    }
}
