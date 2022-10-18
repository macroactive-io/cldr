<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Sarati
 *
 * @psalm-immutable
 */
class ScriptSara extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Sara';
    }

    public function number(): string
    {
        return '292';
    }
}
