<?php

declare (strict_types=1);
namespace Rector\VendorLocker\Contract;

use PhpParser\Node;
interface NodeVendorLockerInterface
{
    public function resolve(\PhpParser\Node $node) : bool;
}
