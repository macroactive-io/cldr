<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests;

use Macroactive\Cldr\Territory;

final class TerritoryTest extends \PHPUnit\Framework\TestCase
{
    public function testAll(): void
    {
        $all = glob(__DIR__ . '/../src/Territory/Territory*.php');

        if (false === $all || count($all) === 0) {
            throw new \RuntimeException('By some reason the list of territories cannot be obtained');
        }

        $count = 0;

        foreach ($all as $item) {
            $className = basename($item, '.php');

            if ('TerritoryInterface' === $className) {
                continue;
            }

            $code     = str_replace('Territory', '', $className);
            $instance = Territory::create($code);

            self::assertInstanceOf(Territory\TerritoryInterface::class, $instance);
            self::assertSame(strtoupper($code), $instance->code());

            $count++;
        }

        self::assertSame(302, $count);
    }
}