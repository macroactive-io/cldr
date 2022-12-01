<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests;

use Exception;

final class CannotFindXpathException extends Exception
{
    public function __construct(string $xpath, string $file, string $locale)
    {
        $this->message = sprintf('Cannot find xpath "%s" in file "%s" for locale "%s"', $xpath, $file, $locale);
    }
}
