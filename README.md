# App Store Connect APIs Client Library for PHP

![GitHub Release](https://img.shields.io/github/v/release/mantix/app-store-connect-api)
![Packagist Downloads](https://img.shields.io/packagist/dt/mantix/app-store-connect-api)
![Packagist License](https://img.shields.io/packagist/l/mantix/app-store-connect-api)
![Packagist Dependency Version](https://img.shields.io/packagist/dependency-v/mantix/app-store-connect-api/php)

## Overview

This library enables developers to automate their interactions with App Store Connect. It's a fork of the excellent [cantie/app-store-connect-api-php](https://github.com/cantie/app-store-connect-api-php) package, updated to work with modern PHP frameworks including Laravel 10+ and Carbon 3.x.

The client was originally modified from [Google API PHP Client](https://github.com/googleapis/google-api-php-client) with resources specifically added for App Store Connect APIs.

## Why This Fork?

This fork was created to address the following needs:

- Support for modern Laravel applications (10+)
- Compatibility with Carbon 3.x
- Future Laravel package development
- Ongoing maintenance and updates
- Enhanced documentation

We maintain high compatibility with the original package while ensuring it works in modern PHP environments.

## Installation

The preferred method is via [composer](https://getcomposer.org/). Follow the
[installation instructions](https://getcomposer.org/doc/00-intro.md) if you do not already have
composer installed.

Once composer is installed, execute the following command in your project root to install this library:

```sh
composer require mantix/app-store-connect-api
```

## Coming Soon: Laravel Package

We're working on a dedicated Laravel package that will provide:

- Simple configuration through Laravel's configuration system
- Integration with Laravel's service container
- Artisan commands for common App Store Connect operations
- Middleware for API rate limiting and token management
- Simple facade access to the API client

Stay tuned for `mantix/laravel-app-store-connect`.

## Usage Examples

### Basic Example

```php
use AppleClient;
use AppleService_AppStore;
use Mantix\AppStoreConnect\Services\AppStore\CustomerReviewResponseV1CreateRequest;

$client = new AppleClient();
$client->setApiKey("PATH_TO_API_KEY");
$client->setIssuerId($issuerId);
$client->setKeyIdentifier($keyIdentifier);

$appstore = new AppleService_AppStore($client);
// Get apps by Bundle ID
$results = $appstore->apps->listApps([
    "filter[bundleId]" => "YOUR_BUNDLE_ID" // filter LIKE
]);

// Get all customer reviews for each app
foreach ($results->getData() as $app) {
    $appCustomerReviews = $appstore->apps->listAppsCustomerReviews($app->getId());
    foreach ($appCustomerReviews as $appCustomerReview) {
        // Print all reviewer's nickname
        echo $appCustomerReview->getAttributes()->getReviewerNickName(), "<br /> \n";

        // Get response for this review
        $customerReviewResponseV1Response = $appstore->customerReviews->getCustomerReviewsResponse($appCustomerReview->getId());

        // Create or update response for this review
        $postBody = new CustomerReviewResponseV1CreateRequest([
            'data' => [
                'attributes' => [
                    'responseBody' => "YOUR_REPLY_TEXT_HERE"
                ],
                'relationships' => [
                    'review' => [
                        'data' => [
                            'id' => $appCustomerReview->getId()
                        ]
                    ]
                ]
            ]
        ]);
        $customerReviewResponseV1Response = $appstore->customerReviewResponses->createCustomerReviewResponses($postBody);

        // Or just delete the response if existed
        $appstore->customerReviewResponses->deleteCustomerReviewResponses($customerReviewResponseV1Response->getData()->getId());
    }
}
```

### Create New Client

```php
use AppleClient;

$client = new AppleClient();
$client->setApiKey("PATH_TO_API_KEY");
$client->setIssuerId($issuerId);
$client->setKeyIdentifier($keyIdentifier);
// Optional: create new JWT token. If skip this step, token are auto generated when first request are sent
$client->generateToken();
```

### Making a Request

For almost all requests except upload service, we use AppStore service:

```php
use AppleService_AppStore;
// All resources and their methods parameters are listed in src/Service/AppStore.php
$appstore = new AppleService_AppStore($client);
// Make request, for example we call request for an Apps's resources
$appstore->apps->listAppsAppStoreVersions($APP_ID_HERE, $OPTIONAL_PARAMS);
```

For details, you can view the source code in `src/Services/AppStore/Resource/*`

### Aliases

Basic classes are aliased for convenient use, see more at `src/aliases.php`

```php
$classMap = [
    'Mantix\\AppStoreConnect\\Client' => 'AppleClient',
    'Mantix\\AppStoreConnect\\Service' => 'AppleService',
    'Mantix\\AppStoreConnect\\Services\\AppStore' => 'AppleService_AppStore',
    'Mantix\\AppStoreConnect\\Services\\Upload' => 'AppleService_Upload'
];
```

### Upload Assets to App Store Connect

In this example we will upload one screenshot file to app screenshot set:

```php
// Firstly, we get app screenshot set step by step, we can reduce steps by include[] parameters in query
use AppleService_Upload;
use Mantix\AppStoreConnect\Services\AppStore\AppScreenshotCreateRequest;
use Mantix\AppStoreConnect\Services\AppStore\AppScreenshotUpdateRequest;

$appId = $app->getId(); // $app from previous example
$appStoreVersions = $appstore->apps->listAppsAppStoreVersions($appId);
// Get first app store version id;
$appStoreVersionId = $appStoreVersions->getData()[0]->getId();
// Get list localizations of this version
$appStoreVersionLocalizations = $appstore->appStoreVersions->listAppStoreVersionsAppStoreVersionLocalizations($appStoreVersionId);
// Get first localization id
$appStoreVersionLocalizationId = $appStoreVersionLocalizations->getData()[0]->getId();
// Get list app screenshot sets for this localization
$appScreenshotSets = $appstore->appStoreVersionLocalizations->listAppStoreVersionLocalizationsAppScreenshotSets($appStoreVersionLocalizationId);
// Get first set id
$appScreenshotSetId = $appScreenshotSets->getData()[0]->getId();

// Now, we make an asset reservation
$fileName = "YOUR_FILE_NAME";
$filePath = "FULL_PATH_TO_YOUR_FILE" . $fileName;
$requestCreateAppScreenshot = new AppScreenshotCreateRequest([
    'data' => [
        'type' => 'appScreenshots',
        'attributes' => [
            'fileSize' => filesize($filePath),
            'fileName' => $fileName
        ],
        'relationships' => [
            'appScreenshotSet' => [
                'data' => [
                    'type' => 'appScreenshotSets',
                    'id' => $appScreenshotSetId
                ]
            ]
        ]
    ]
]);
// Create new app screenshot
$appScreenshot = $appstore->appScreenshots->createAppScreenshots($requestCreateAppScreenshot);
$appScreenshotId = $appScreenshot->getData()->getId();
// Follow instruction from UploadOperation[] return in $appScreenshot to upload part or whole asset file
// We can upload parts of your asset concurrently
foreach ($appScreenshot->getData()->getAttributes()->getUploadOperations() as $uploadOperation) {
    $upload = new AppleService_Upload($client, $uploadOperation); // $client from above example
    $ret = $upload->uploadAssets->upload($uploadOperation, $filePath);
}
// Finally, commit the reservation
$appScreenshotUpdateRequest = new AppScreenshotUpdateRequest([
    'data' => [
        'type' => 'appScreenshots',
        'id' => $appScreenshotId,
        'attributes' => [
            'sourceFileChecksum' => md5_file($filePath),
            'uploaded' => true
        ]
    ]
]);
$ret = $appstore->appScreenshots->updateAppScreenshots($appScreenshotId, $appScreenshotUpdateRequest); 
```

### Initialize Classes

All object classes that extend from `Model.php` can be initialized with an array of attribute names and values, as in the previous example:

```php
use Mantix\AppStoreConnect\Services\AppStore\AppScreenshotUpdateRequest;
$appScreenshotUpdateRequest = new AppScreenshotUpdateRequest([
    'data' => [
        'type' => 'appScreenshots',
        'id' => $appScreenshotId,
        'attributes' => [
            'sourceFileChecksum' => md5_file($filePath),
            'uploaded' => true
        ]
    ]
]);
```

### Caching

JWT tokens are cached for 10 minutes and only generated if they don't exist or have expired. JWT tokens are not shared between clients. Each client has its own token as defined in `src/Client.php`:

```php
public function generateToken()
{
    $tokenGenerator = new Generate($this->getApiKey(), $this->getKeyIdentifier(), $this->getIssuerId());
    $jwtToken = $tokenGenerator->generateToken();
    // cache for 10 minutes
    $this->jwtToken = $jwtToken;
    $this->jwtTokenExpTime = (new DateTime())->modify("+10 minutes")->getTimestamp();
    return $jwtToken;
}
```

## Laravel Integration

While we're working on our dedicated Laravel package, here's a simple approach to integrate this library into your Laravel applications:

### Service Provider

Create a service provider for App Store Connect API:

```php
<?php

namespace App\Providers;

use AppleClient;
use AppleService_AppStore;
use Illuminate\Support\ServiceProvider;

class AppStoreConnectServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(AppleClient::class, function ($app) {
            $client = new AppleClient();
            $client->setApiKey(storage_path('app/appstore_private_key.p8'));
            $client->setIssuerId(config('services.appstore.issuer_id'));
            $client->setKeyIdentifier(config('services.appstore.key_id'));
            return $client;
        });

        $this->app->singleton(AppleService_AppStore::class, function ($app) {
            return new AppleService_AppStore($app->make(AppleClient::class));
        });
    }
}
```

### Configuration

Update your `config/services.php` file:

```php
'appstore' => [
    'key_id' => env('APPSTORE_KEY_ID'),
    'issuer_id' => env('APPSTORE_ISSUER_ID'),
]
```

### Usage in Laravel

Now you can inject the service where needed:

```php
<?php

namespace App\Http\Controllers;

use AppleService_AppStore;

class AppStoreController extends Controller
{
    public function listApps(AppleService_AppStore $appStoreService)
    {
        $apps = $appStoreService->apps->listApps();
        return view('apps.index', compact('apps'));
    }
}
```

## Acknowledgements

This package is a fork of [cantie/app-store-connect-api-php](https://github.com/cantie/app-store-connect-api-php). We express our gratitude to the original authors for their excellent work. Our goal is to build upon their foundation to ensure compatibility with modern PHP frameworks while maintaining the core functionality.

## License

This library is licensed under the MIT License.