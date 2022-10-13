<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptSora - Representation of the Sora Sompeng script.
 */
class ScriptSora extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Sora';
    }

    public function numerals()
    {
        return ['𑃰', '𑃱', '𑃲', '𑃳', '𑃴', '𑃵', '𑃶', '𑃷', '𑃸', '𑃹'];
    }

    public function number()
    {
        return '398';
    }

    public function unicodeName()
    {
        return 'Sora_Sompeng';
    }
}
