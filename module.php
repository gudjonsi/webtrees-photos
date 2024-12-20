<?php

namespace UksusoFF\WebtreesModules\Photos;

if (defined('WT_MODULES_DIR')) {
    // This is a webtrees 2.x module. it cannot be used with webtrees 1.x. See README.md.
    return;
}

require_once __DIR__ . '/autoload.php';

return new Modules\PhotosModule();
