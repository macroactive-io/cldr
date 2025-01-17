<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Batak
 *
 * @psalm-immutable
 */
class ScriptBatk extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Batk';
    }

    public function number(): string
    {
        return '365';
    }

    public function unicodeName(): string
    {
        return 'Batak';
    }
}
