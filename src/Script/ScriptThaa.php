<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Class ScriptThaa - Representation of the Thaana script.
 * @psalm-immutable
 */
class ScriptThaa extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Thaa';
    }

    public function number(): string
    {
        return '170';
    }

    public function unicodeName(): string
    {
        return 'Thaana';
    }
}
