<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptBrah - Representation of the Brahmi script.
 */
class ScriptBrah extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Brah';
    }

    public function numerals()
    {
        return ['𑁦', '𑁧', '𑁨', '𑁩', '𑁪', '𑁫', '𑁬', '𑁭', '𑁮', '𑁯'];
    }

    public function number()
    {
        return '300';
    }

    public function unicodeName()
    {
        return 'Brahmi';
    }
}
