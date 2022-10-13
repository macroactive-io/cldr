<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptKhoj - Representation of the Khojki script.
 */
class ScriptKhoj extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Khoj';
    }

    public function number()
    {
        return '322';
    }

    public function unicodeName()
    {
        return 'Khojki';
    }
}
