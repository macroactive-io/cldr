<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Gunjala Gondi
 *
 * @psalm-immutable
 */
class ScriptGong extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Gong';
    }

    public function number(): string
    {
        return '312';
    }

    public function unicodeName(): string
    {
        return 'Gunjala_Gondi';
    }
}
