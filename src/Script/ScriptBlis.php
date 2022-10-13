<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptBlis - Representation of the Blissymbols script.
 */
class ScriptBlis extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Blis';
    }

    public function number()
    {
        return '550';
    }
}
