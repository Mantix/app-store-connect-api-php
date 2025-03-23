<?php

if (class_exists('AppleClient', false)) {
    // Prevent error with preloading in PHP 7.4
    // @see https://github.com/googleapis/google-api-php-client/issues/1976
    return;
}

$classMap = [
    'Mantix\\AppStoreConnect\\Client' => 'AppleClient',
    'Mantix\\AppStoreConnect\\Service' => 'AppleService',
    'Mantix\\AppStoreConnect\\Services\\AppStore' => 'AppleService_AppStore',
    'Mantix\\AppStoreConnect\\Services\\Upload' => 'AppleService_Upload'
];

foreach ($classMap as $class => $alias) {
    class_alias($class, $alias);
}

/** @phpstan-ignore-next-line */
if (\false) {
    class AppleClient extends \Mantix\AppStoreConnect\Client {
    }
    class AppleService extends \Mantix\AppStoreConnect\Service {
    }
    class AppleService_AppStore extends \Mantix\AppStoreConnect\Services\AppStore {
    }
    class AppleService_Upload extends \Mantix\AppStoreConnect\Services\Upload {
    }
}
