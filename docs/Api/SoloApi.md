# VATUSA\Client\SoloApi

All URIs are relative to *https://api.vatusa.net/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**soloDelete**](SoloApi.md#soloDelete) | **DELETE** /solo | Delete solo certification. [Key]
[**soloGet**](SoloApi.md#soloGet) | **GET** /solo | Get list of active solo certifications.
[**soloPost**](SoloApi.md#soloPost) | **POST** /solo | Submit new solo certification. [Key]


# **soloDelete**
> \VATUSA\Client\Model\OK soloDelete($deleteSoloRequest)

Delete solo certification. [Key]

Delete solo certification. Pass the DB ID OR both CID and Position. Requires API Key, JWT, or      *     Session cookie (required roles: [N/A     for API Key] ATM, DATM, TA, INS).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
$config = VATUSA\Client\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VATUSA\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');
// Configure HTTP basic authorization: jwt
$config = VATUSA\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure HTTP basic authorization: session
$config = VATUSA\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new VATUSA\Client\Api\SoloApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$deleteSoloRequest = new \VATUSA\Client\Model\DeleteSoloRequest(); // \VATUSA\Client\Model\DeleteSoloRequest | 

try {
    $result = $apiInstance->soloDelete($deleteSoloRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SoloApi->soloDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deleteSoloRequest** | [**\VATUSA\Client\Model\DeleteSoloRequest**](../Model/DeleteSoloRequest.md)|  |

### Return type

[**\VATUSA\Client\Model\OK**](../Model/OK.md)

### Authorization

[apikey](../../README.md#apikey), [jwt](../../README.md#jwt), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **soloGet**
> \VATUSA\Client\Model\InlineResponse20014[] soloGet($position)

Get list of active solo certifications.

Get list of active solo certifications.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new VATUSA\Client\Api\SoloApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$position = "position_example"; // string | Filter for position

try {
    $result = $apiInstance->soloGet($position);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SoloApi->soloGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **position** | **string**| Filter for position | [optional]

### Return type

[**\VATUSA\Client\Model\InlineResponse20014[]**](../Model/InlineResponse20014.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **soloPost**
> \VATUSA\Client\Model\InlineResponse20015 soloPost($newSoloRequest)

Submit new solo certification. [Key]

Submit new solo certification. Requires API Key, JWT, or Session Cookie (required roles:     [N/A for API Key] ATM, DATM, TA, INS)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
$config = VATUSA\Client\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VATUSA\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');
// Configure HTTP basic authorization: jwt
$config = VATUSA\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure HTTP basic authorization: session
$config = VATUSA\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new VATUSA\Client\Api\SoloApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$newSoloRequest = new \VATUSA\Client\Model\NewSoloRequest(); // \VATUSA\Client\Model\NewSoloRequest | 

try {
    $result = $apiInstance->soloPost($newSoloRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SoloApi->soloPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **newSoloRequest** | [**\VATUSA\Client\Model\NewSoloRequest**](../Model/NewSoloRequest.md)|  |

### Return type

[**\VATUSA\Client\Model\InlineResponse20015**](../Model/InlineResponse20015.md)

### Authorization

[apikey](../../README.md#apikey), [jwt](../../README.md#jwt), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

