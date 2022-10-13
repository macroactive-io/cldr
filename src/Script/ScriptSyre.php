<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptSyre - Representation of the Syriac (Estrangelo variant) script.
 */
class ScriptSyre extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Syre';
    }

    public function number()
    {
        return '138';
    }
}
