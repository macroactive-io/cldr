<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptBhks - Representation of the Bhaiksuki script.
 */
class ScriptBhks extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Bhks';
    }

    public function number()
    {
        return '334';
    }

    public function unicodeName()
    {
        return 'Bhaiksuki';
    }
}
