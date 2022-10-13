<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptBatk - Representation of the Batak script.
 */
class ScriptBatk extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Batk';
    }

    public function number()
    {
        return '365';
    }

    public function unicodeName()
    {
        return 'Batak';
    }
}
