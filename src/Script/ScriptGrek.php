<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Class ScriptGrek - Representation of the Greek script.
 * @psalm-immutable
 */
class ScriptGrek extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Grek';
    }

    public function number(): string
    {
        return '200';
    }

    public function unicodeName(): string
    {
        return 'Greek';
    }
}
