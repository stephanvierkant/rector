<?php

declare(strict_types=1);

namespace Rector\CodeQuality\Tests\Rector\Foreach_\SimplifyForeachToCoalescingRector;

use Iterator;
use Rector\CodeQuality\Rector\Foreach_\SimplifyForeachToCoalescingRector;
use Rector\Core\Testing\PHPUnit\AbstractRectorTestCase;
use Symplify\SmartFileSystem\SmartFileInfo;

final class SimplifyForeachToCoalescingRectorTest extends AbstractRectorTestCase
{
    /**
     * @dataProvider provideData()
     */
    public function test(SmartFileInfo $fileInfo): void
    {
        $this->doTestFileInfo($fileInfo);
    }

    public function provideData(): Iterator
    {
        return $this->yieldFilesFromDirectory(__DIR__ . '/Fixture');
    }

    protected function getRectorClass(): string
    {
        return SimplifyForeachToCoalescingRector::class;
    }
}
