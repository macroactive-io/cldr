<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Bamum
 *
 * @psalm-immutable
 */
class ScriptBamu extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Bamu';
    }

    public function number(): string
    {
        return '435';
    }

    public function unicodeName(): string
    {
        return 'Bamum';
    }
}
