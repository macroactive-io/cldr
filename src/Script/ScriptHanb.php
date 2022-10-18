<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Class ScriptHanb - Representation of the Hangul+Bopomofo script.
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
