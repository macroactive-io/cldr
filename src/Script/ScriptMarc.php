<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Marchen
 *
 * @psalm-immutable
 */
class ScriptMarc extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Marc';
    }

    public function number(): string
    {
        return '332';
    }

    public function unicodeName(): string
    {
        return 'Marchen';
    }
}
