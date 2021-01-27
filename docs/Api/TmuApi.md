# VATUSA\Client\TmuApi

All URIs are relative to *https://api.vatusa.net/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**tmuNoticeIdDelete**](TmuApi.md#tmuNoticeIdDelete) | **DELETE** /tmu/notice/{id} | Delete TMU Notice. [Key]
[**tmuNoticeIdGet**](TmuApi.md#tmuNoticeIdGet) | **GET** /tmu/notice/{id} | Get TMU Notice info.
[**tmuNoticeIdPut**](TmuApi.md#tmuNoticeIdPut) | **PUT** /tmu/notice/{id} | Edit TMU Notice. [Key]
[**tmuNoticesGet**](TmuApi.md#tmuNoticesGet) | **GET** /tmu/notices | Get list of TMU Notices.
[**tmuNoticesPost**](TmuApi.md#tmuNoticesPost) | **POST** /tmu/notices | Add new TMU Notice. [Key]


# **tmuNoticeIdDelete**
> \VATUSA\Client\Model\OK tmuNoticeIdDelete($id)

Delete TMU Notice. [Key]

Delete solo certification. Requires API Key, JWT, or Session cookie (required roles: [N/A     for API Key] ATM, DATM, TA, EC, INS)

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


$apiInstance = new VATUSA\Client\Api\TmuApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | TMU Notice ID

try {
    $result = $apiInstance->tmuNoticeIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TmuApi->tmuNoticeIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| TMU Notice ID |

### Return type

[**\VATUSA\Client\Model\OK**](../Model/OK.md)

### Authorization

[apikey](../../README.md#apikey), [jwt](../../README.md#jwt), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tmuNoticeIdGet**
> \VATUSA\Client\Model\InlineResponse20020[] tmuNoticeIdGet($id)

Get TMU Notice info.

Get information for a specific TMU Notice.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new VATUSA\Client\Api\TmuApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | TMU Notice ID

try {
    $result = $apiInstance->tmuNoticeIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TmuApi->tmuNoticeIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TMU Notice ID |

### Return type

[**\VATUSA\Client\Model\InlineResponse20020[]**](../Model/InlineResponse20020.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tmuNoticeIdPut**
> \VATUSA\Client\Model\InlineResponse20013 tmuNoticeIdPut($id, $facility, $priority, $message, $startDate, $expireDate, $isDelay, $isPrefRoute)

Edit TMU Notice. [Key]

Edit TMU Notice. Requires API Key, JWT, or Session Cookie (required roles:     [N/A for API Key] ATM, DATM, TA, EC, INS)

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


$apiInstance = new VATUSA\Client\Api\TmuApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | TMU Notice ID
$facility = "facility_example"; // string | TMU Facility/Map ID
$priority = "priority_example"; // string | Priority of notice     (1: Low, 2: Standard, 3: Urgent)
$message = "message_example"; // string | Notice content
$startDate = "startDate_example"; // string | Start time (YYYY-MM-DD HH:MM)
$expireDate = "expireDate_example"; // string | Expiration time (YYYY-MM-DD HH:MM) - null for no     expiration
$isDelay = true; // bool | TMU Notice is a ground stop or delay.
$isPrefRoute = true; // bool | TMU Notice is a preferred routing

try {
    $result = $apiInstance->tmuNoticeIdPut($id, $facility, $priority, $message, $startDate, $expireDate, $isDelay, $isPrefRoute);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TmuApi->tmuNoticeIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| TMU Notice ID |
 **facility** | **string**| TMU Facility/Map ID | [optional]
 **priority** | **string**| Priority of notice     (1: Low, 2: Standard, 3: Urgent) | [optional]
 **message** | **string**| Notice content | [optional]
 **startDate** | **string**| Start time (YYYY-MM-DD HH:MM) | [optional]
 **expireDate** | **string**| Expiration time (YYYY-MM-DD HH:MM) - null for no     expiration | [optional]
 **isDelay** | **bool**| TMU Notice is a ground stop or delay. | [optional]
 **isPrefRoute** | **bool**| TMU Notice is a preferred routing | [optional]

### Return type

[**\VATUSA\Client\Model\InlineResponse20013**](../Model/InlineResponse20013.md)

### Authorization

[apikey](../../README.md#apikey), [jwt](../../README.md#jwt), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tmuNoticesGet**
> \VATUSA\Client\Model\InlineResponse20019[] tmuNoticesGet($facility, $children, $onlyactive)

Get list of TMU Notices.

Get list of TMU Notices for either all of VATUSA or for the specified TMU Map ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new VATUSA\Client\Api\TmuApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$facility = "facility_example"; // string | TMU Facility/Map ID (optional)
$children = true; // bool | If a parent map is selected,     include its children TMU's Notices.
$onlyactive = true; // bool | Only include active notices.     Default = true.

try {
    $result = $apiInstance->tmuNoticesGet($facility, $children, $onlyactive);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TmuApi->tmuNoticesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **facility** | **string**| TMU Facility/Map ID (optional) | [optional]
 **children** | **bool**| If a parent map is selected,     include its children TMU&#39;s Notices. | [optional]
 **onlyactive** | **bool**| Only include active notices.     Default &#x3D; true. | [optional]

### Return type

[**\VATUSA\Client\Model\InlineResponse20019[]**](../Model/InlineResponse20019.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tmuNoticesPost**
> \VATUSA\Client\Model\InlineResponse20013 tmuNoticesPost($facility, $priority, $message, $startDate, $expireDate, $isDelay, $isPrefRoute)

Add new TMU Notice. [Key]

Add new TMU Notice. Requires API Key, JWT, or Session Cookie (required roles:     [N/A for API Key] ATM, DATM, TA, EC, INS)

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


$apiInstance = new VATUSA\Client\Api\TmuApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$facility = "facility_example"; // string | TMU Facility/Map ID
$priority = "priority_example"; // string | Priority of notice     (1: Low, 2: Standard, 3: Urgent)
$message = "message_example"; // string | Notice content
$startDate = "startDate_example"; // string | Effective date (YYYY-MM-DD     HH:MM)
$expireDate = "expireDate_example"; // string | Expiration date (YYYY-MM-DD     HH:MM)
$isDelay = true; // bool | TMU Notice is a ground stop or delay
$isPrefRoute = true; // bool | TMU Notice is a preferred routing

try {
    $result = $apiInstance->tmuNoticesPost($facility, $priority, $message, $startDate, $expireDate, $isDelay, $isPrefRoute);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TmuApi->tmuNoticesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **facility** | **string**| TMU Facility/Map ID |
 **priority** | **string**| Priority of notice     (1: Low, 2: Standard, 3: Urgent) |
 **message** | **string**| Notice content |
 **startDate** | **string**| Effective date (YYYY-MM-DD     HH:MM) | [optional]
 **expireDate** | **string**| Expiration date (YYYY-MM-DD     HH:MM) | [optional]
 **isDelay** | **bool**| TMU Notice is a ground stop or delay | [optional]
 **isPrefRoute** | **bool**| TMU Notice is a preferred routing | [optional]

### Return type

[**\VATUSA\Client\Model\InlineResponse20013**](../Model/InlineResponse20013.md)

### Authorization

[apikey](../../README.md#apikey), [jwt](../../README.md#jwt), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

