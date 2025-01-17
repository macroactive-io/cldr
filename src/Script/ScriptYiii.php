<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Yi
 *
 * @psalm-immutable
 */
class ScriptYiii extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Yiii';
    }

    public function number(): string
    {
        return '460';
    }

    public function unicodeName(): string
    {
        return 'Yi';
    }
}
