<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Avestan
 *
 * @psalm-immutable
 */
class ScriptAvst extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Avst';
    }

    public function number(): string
    {
        return '134';
    }

    public function unicodeName(): string
    {
        return 'Avestan';
    }
}
