<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Ugaritic
 *
 * @psalm-immutable
 */
class ScriptUgar extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Ugar';
    }

    public function number(): string
    {
        return '040';
    }

    public function unicodeName(): string
    {
        return 'Ugaritic';
    }
}
