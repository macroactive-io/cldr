<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Class ScriptYezi - Representation of the Yezidi script.
 * @psalm-immutable
 */
class ScriptYezi extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Yezi';
    }

    public function number(): string
    {
        return '192';
    }

    public function unicodeName(): string
    {
        return 'Yezidi';
    }
}
