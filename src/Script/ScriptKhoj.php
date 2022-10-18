<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Khojki
 *
 * @psalm-immutable
 */
class ScriptKhoj extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Khoj';
    }

    public function number(): string
    {
        return '322';
    }

    public function unicodeName(): string
    {
        return 'Khojki';
    }
}
