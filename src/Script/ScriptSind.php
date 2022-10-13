<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptSind - Representation of the Khudawadi, Sindhi script.
 */
class ScriptSind extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Sind';
    }

    public function number()
    {
        return '318';
    }

    public function unicodeName()
    {
        return 'Khudawadi';
    }
}
