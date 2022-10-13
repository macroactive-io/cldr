<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptCpmn - Representation of the Gunjala Gondi script.
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
