<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptVisp - Representation of the Visible Speech script.
 */
class ScriptVisp extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Visp';
    }

    public function number()
    {
        return '280';
    }
}
