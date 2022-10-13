<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptJpan - Representation of the Japanese script.
 */
class ScriptJpan extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Jpan';
    }

    public function number()
    {
        return '413';
    }
}
