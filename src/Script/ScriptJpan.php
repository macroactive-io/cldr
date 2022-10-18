<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Japanese
 *
 * @psalm-immutable
 */
class ScriptJpan extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Jpan';
    }

    public function number(): string
    {
        return '413';
    }
}
