<?php

namespace RectorPrefix20210529;

if (\class_exists('tslib_fecompression')) {
    return;
}
class tslib_fecompression
{
}
\class_alias('tslib_fecompression', 'tslib_fecompression', \false);