# VATUSA\Client\TransferApi

All URIs are relative to *https://api.vatusa.net/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**userCidTransferChecklistGet**](TransferApi.md#userCidTransferChecklistGet) | **GET** /user/{cid}/transfer/checklist | Get user&#39;s transfer checklist. [Key]
[**userCidTransferHistoryGet**](TransferApi.md#userCidTransferHistoryGet) | **GET** /user/{cid}/transfer/history | Get user&#39;s transfer history. [Key]
[**userCidTransferPost**](TransferApi.md#userCidTransferPost) | **POST** /user/{cid}/transfer | Submit transfer request. [Private]


# **userCidTransferChecklistGet**
> \VATUSA\Client\Model\InlineResponse20023[] userCidTransferChecklistGet($cid)

Get user's transfer checklist. [Key]

Get user's checklist. Requires JWT, API Key, or Session Cookie (required role [N/A for     apikey]: ATM, DATM, WM)

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


$apiInstance = new VATUSA\Client\Api\TransferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cid = 56; // int | CERT ID

try {
    $result = $apiInstance->userCidTransferChecklistGet($cid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransferApi->userCidTransferChecklistGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cid** | **int**| CERT ID |

### Return type

[**\VATUSA\Client\Model\InlineResponse20023[]**](../Model/InlineResponse20023.md)

### Authorization

[apikey](../../README.md#apikey), [jwt](../../README.md#jwt), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userCidTransferHistoryGet**
> \VATUSA\Client\Model\Transfer[] userCidTransferHistoryGet($cid)

Get user's transfer history. [Key]

Get user's transfer history. Requires API Key, JWT or Session Cookie (required role: [N/A for      *     API     Key] ATM, DATM, TA, WM, VATUSA STAFF)

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


$apiInstance = new VATUSA\Client\Api\TransferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cid = 56; // int | CERT ID

try {
    $result = $apiInstance->userCidTransferHistoryGet($cid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransferApi->userCidTransferHistoryGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cid** | **int**| CERT ID |

### Return type

[**\VATUSA\Client\Model\Transfer[]**](../Model/Transfer.md)

### Authorization

[apikey](../../README.md#apikey), [jwt](../../README.md#jwt), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userCidTransferPost**
> \VATUSA\Client\Model\OK userCidTransferPost($cid, $facility, $reason)

Submit transfer request. [Private]

Submit transfer request. CORS Restricted, Requires JWT or Session Cookie (self or VATUSA     staff)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: jwt
$config = VATUSA\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure HTTP basic authorization: session
$config = VATUSA\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new VATUSA\Client\Api\TransferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cid = 56; // int | CERT ID
$facility = "facility_example"; // string | Facility IATA      *                                     ID
$reason = "reason_example"; // string | Reason for transfer      *                                   request

try {
    $result = $apiInstance->userCidTransferPost($cid, $facility, $reason);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransferApi->userCidTransferPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cid** | **int**| CERT ID |
 **facility** | **string**| Facility IATA      *                                     ID |
 **reason** | **string**| Reason for transfer      *                                   request |

### Return type

[**\VATUSA\Client\Model\OK**](../Model/OK.md)

### Authorization

[jwt](../../README.md#jwt), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

