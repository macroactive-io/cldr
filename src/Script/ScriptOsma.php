<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptOsma - Representation of the Osmanya script.
 */
class ScriptOsma extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Osma';
    }

    public function numerals()
    {
        return ['𐒠', '𐒡', '𐒢', '𐒣', '𐒤', '𐒥', '𐒦', '𐒧', '𐒨', '𐒩'];
    }

    public function number()
    {
        return '260';
    }

    public function unicodeName()
    {
        return 'Osmanya';
    }
}
