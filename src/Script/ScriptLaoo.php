<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptLaoo - Representation of the Lao script.
 */
class ScriptLaoo extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Laoo';
    }

    public function numerals()
    {
        return ['໐', '໑', '໒', '໓', '໔', '໕', '໖', '໗', '໘', '໙'];
    }

    public function number()
    {
        return '356';
    }

    public function unicodeName()
    {
        return 'Lao';
    }
}
