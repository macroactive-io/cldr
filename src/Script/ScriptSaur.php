<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptSaur - Representation of the Saurashtra script.
 * @psalm-immutable
 */
class ScriptSaur extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Saur';
    }

    public function numerals(): array
    {
        return ['꣐', '꣑', '꣒', '꣓', '꣔', '꣕', '꣖', '꣗', '꣘', '꣙'];
    }

    public function number(): string
    {
        return '344';
    }

    public function unicodeName(): string
    {
        return 'Saurashtra';
    }
}
