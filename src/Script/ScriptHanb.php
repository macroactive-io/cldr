<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Hangul+Bopomofo
 *
 * @psalm-immutable
 */
class ScriptHanb extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Hanb';
    }

    public function number(): string
    {
        return '503';
    }
}
