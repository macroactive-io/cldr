<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * SignWriting
 *
 * @psalm-immutable
 */
class ScriptSgnw extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Sgnw';
    }

    public function number(): string
    {
        return '095';
    }

    public function unicodeName(): string
    {
        return 'SignWriting';
    }
}
