<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Kpelle
 *
 * @psalm-immutable
 */
class ScriptKpel extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Kpel';
    }

    public function number(): string
    {
        return '436';
    }
}
