<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Class ScriptZsye - Representation of the Zsye script.
 * @psalm-immutable
 */
class ScriptZsye extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Zsye';
    }

    public function number(): string
    {
        return '993';
    }
}
