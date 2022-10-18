<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Cyrillic (Old Church Slavonic variant)
 *
 * @psalm-immutable
 */
class ScriptCyrs extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Cyrs';
    }

    public function number(): string
    {
        return '221';
    }
}
