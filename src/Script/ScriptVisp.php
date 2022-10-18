<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Visible Speech
 *
 * @psalm-immutable
 */
class ScriptVisp extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Visp';
    }

    public function number(): string
    {
        return '280';
    }
}
