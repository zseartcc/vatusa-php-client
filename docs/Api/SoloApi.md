# VATUSA\Client\SoloApi

All URIs are relative to *https://api.vatusa.net/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**soloDelete**](SoloApi.md#soloDelete) | **DELETE** /solo | Delete solo certification. [Key]
[**soloGet**](SoloApi.md#soloGet) | **GET** /solo | Get list of active solo certifications.
[**soloPost**](SoloApi.md#soloPost) | **POST** /solo | Submit new solo certification. [Key]


# **soloDelete**
> \VATUSA\Client\Model\OK soloDelete($cid, $position, $id)

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
$cid = 56; // int | Vatsim ID
$position = "position_example"; // string | Position ID (XYZ_APP,     ZZZ_CTR)
$id = 56; // int | Endorsement ID. Use this      *                           OR both CID and Position.

try {
    $result = $apiInstance->soloDelete($cid, $position, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SoloApi->soloDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cid** | **int**| Vatsim ID |
 **position** | **string**| Position ID (XYZ_APP,     ZZZ_CTR) |
 **id** | **int**| Endorsement ID. Use this      *                           OR both CID and Position. | [optional]

### Return type

[**\VATUSA\Client\Model\OK**](../Model/OK.md)

### Authorization

[apikey](../../README.md#apikey), [jwt](../../README.md#jwt), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: multipart/form-data
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
> \VATUSA\Client\Model\InlineResponse20015 soloPost($cid, $position, $expDate)

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
$cid = 56; // int | CERT ID
$position = "position_example"; // string | Position ID     (XYZ_APP, ZZZ_CTR)
$expDate = "expDate_example"; // string | Date of expiration     (YYYY-MM-DD)

try {
    $result = $apiInstance->soloPost($cid, $position, $expDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SoloApi->soloPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cid** | **int**| CERT ID |
 **position** | **string**| Position ID     (XYZ_APP, ZZZ_CTR) |
 **expDate** | **string**| Date of expiration     (YYYY-MM-DD) |

### Return type

[**\VATUSA\Client\Model\InlineResponse20015**](../Model/InlineResponse20015.md)

### Authorization

[apikey](../../README.md#apikey), [jwt](../../README.md#jwt), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

