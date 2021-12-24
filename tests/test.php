<?php

declare(strict_types=1);

ini_set('assert.exception', 'true');

// memory limit
assert(ini_get('memory_limit') === "-1");

// extensions
assert(extension_loaded('intl'));
assert(extension_loaded('zip'));
assert(extension_loaded('json'));
assert(extension_loaded('bcmath'));
assert(extension_loaded('pdo_mysql'));
assert(extension_loaded('pdo'));
assert(extension_loaded('apcu'));
assert(extension_loaded('amqp'));
assert(extension_loaded('mbstring'));
assert(extension_loaded('Zend OPcache'));

