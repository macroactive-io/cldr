<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptZinh - Representation of the Code for inherited script script.
 */
class ScriptZinh extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Zinh';
    }

    public function number()
    {
        return '994';
    }

    public function unicodeName()
    {
        return 'Inherited';
    }
}
