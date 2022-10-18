<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Woleai
 *
 * @psalm-immutable
 */
class ScriptWole extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Wole';
    }

    public function number(): string
    {
        return '480';
    }
}
