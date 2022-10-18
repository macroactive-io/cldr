<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Class ScriptZxxx - Representation of the Code for unwritten documents script.
 * @psalm-immutable
 */
class ScriptZxxx extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Zxxx';
    }

    public function number(): string
    {
        return '997';
    }
}
