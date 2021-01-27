# VATUSA\Client\FacilityApi

All URIs are relative to *https://api.vatusa.net/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**facilityFacilityTrainingRecordsGet**](FacilityApi.md#facilityFacilityTrainingRecordsGet) | **GET** /facility/{facility}/training/records | Get facility&#39;s training records. [Key]
[**facilityGet**](FacilityApi.md#facilityGet) | **GET** /facility | Get list of VATUSA facilities.
[**facilityIdEmailTemplateNameGet**](FacilityApi.md#facilityIdEmailTemplateNameGet) | **GET** /facility/{id}/email/{templateName} | Get facility&#39;s email template. [Key]
[**facilityIdEmailTemplateNamePost**](FacilityApi.md#facilityIdEmailTemplateNamePost) | **POST** /facility/{id}/email/{templateName} | Modify facility&#39;s email template. [Auth]
[**facilityIdGet**](FacilityApi.md#facilityIdGet) | **GET** /facility/{id} | Get facility information.
[**facilityIdPut**](FacilityApi.md#facilityIdPut) | **PUT** /facility/{id} | Update facility information. [Auth]
[**facilityIdRosterCidDelete**](FacilityApi.md#facilityIdRosterCidDelete) | **DELETE** /facility/{id}/roster/{cid} | Delete member from facility roster. [Auth]
[**facilityIdRosterGet**](FacilityApi.md#facilityIdRosterGet) | **GET** /facility/{id}/roster | Get facility roster.
[**facilityIdTransfersGet**](FacilityApi.md#facilityIdTransfersGet) | **GET** /facility/{id}/transfers | Get pending transfers. [Key]
[**facilityIdTransfersTransferIdPut**](FacilityApi.md#facilityIdTransfersTransferIdPut) | **PUT** /facility/{id}/transfers/{transferId} | Modify transfer request.  [Auth]
[**facilityIdUlsReturnsGet**](FacilityApi.md#facilityIdUlsReturnsGet) | **GET** /facility/{id}/ulsReturns | Get ULS return paths. [Key]
[**facilityIdUlsReturnsOrderDelete**](FacilityApi.md#facilityIdUlsReturnsOrderDelete) | **DELETE** /facility/{id}/ulsReturns/{order} | Remove ULS return path. [Key]
[**facilityIdUlsReturnsPost**](FacilityApi.md#facilityIdUlsReturnsPost) | **POST** /facility/{id}/ulsReturns | Add ULS return path. [Key]
[**facilityIdUlsReturnsPut**](FacilityApi.md#facilityIdUlsReturnsPut) | **PUT** /facility/{id}/ulsReturns | Edit ULS return path. [Key]


# **facilityFacilityTrainingRecordsGet**
> \VATUSA\Client\Model\TrainingRecord facilityFacilityTrainingRecordsGet($facility)

Get facility's training records. [Key]

Get all facility's training records. Must have APIKey or be Senior Staff or Training Staff.

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


$apiInstance = new VATUSA\Client\Api\FacilityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$facility = "facility_example"; // string | Facility

try {
    $result = $apiInstance->facilityFacilityTrainingRecordsGet($facility);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FacilityApi->facilityFacilityTrainingRecordsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **facility** | **string**| Facility |

### Return type

[**\VATUSA\Client\Model\TrainingRecord**](../Model/TrainingRecord.md)

### Authorization

[apikey](../../README.md#apikey), [jwt](../../README.md#jwt), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **facilityGet**
> \VATUSA\Client\Model\Facility[] facilityGet()

Get list of VATUSA facilities.

Get list of VATUSA facilities.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new VATUSA\Client\Api\FacilityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->facilityGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FacilityApi->facilityGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\VATUSA\Client\Model\Facility[]**](../Model/Facility.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **facilityIdEmailTemplateNameGet**
> \VATUSA\Client\Model\EmailTemplate facilityIdEmailTemplateNameGet($id, $templateName)

Get facility's email template. [Key]

Get facility's email template. Requires API Key, Session Cookie (ATM/DATM/TA), or JWT

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new VATUSA\Client\Api\FacilityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Facility IATA ID
$templateName = "templateName_example"; // string | Name of template (welcome, examassigned,     examfailed, exampassed)

try {
    $result = $apiInstance->facilityIdEmailTemplateNameGet($id, $templateName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FacilityApi->facilityIdEmailTemplateNameGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Facility IATA ID |
 **templateName** | **string**| Name of template (welcome, examassigned,     examfailed, exampassed) |

### Return type

[**\VATUSA\Client\Model\EmailTemplate**](../Model/EmailTemplate.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **facilityIdEmailTemplateNamePost**
> \VATUSA\Client\Model\InlineResponse20010 facilityIdEmailTemplateNamePost($id, $templateName, $body)

Modify facility's email template. [Auth]

Modify facility's email template. Requires JWT or Session Cookie (ATM/DATM/TA)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new VATUSA\Client\Api\FacilityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Facility IATA ID
$templateName = "templateName_example"; // string | Name of template (welcome, examassigned,      *                                         examfailed, exampassed)
$body = "body_example"; // string | Text of template

try {
    $result = $apiInstance->facilityIdEmailTemplateNamePost($id, $templateName, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FacilityApi->facilityIdEmailTemplateNamePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Facility IATA ID |
 **templateName** | **string**| Name of template (welcome, examassigned,      *                                         examfailed, exampassed) |
 **body** | **string**| Text of template |

### Return type

[**\VATUSA\Client\Model\InlineResponse20010**](../Model/InlineResponse20010.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **facilityIdGet**
> \VATUSA\Client\Model\InlineResponse2008 facilityIdGet($id)

Get facility information.

Get facility information.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new VATUSA\Client\Api\FacilityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Facility IATA ID

try {
    $result = $apiInstance->facilityIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FacilityApi->facilityIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Facility IATA ID |

### Return type

[**\VATUSA\Client\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **facilityIdPut**
> \VATUSA\Client\Model\InlineResponse2009 facilityIdPut($id, $url, $urlDev, $uls2jwk, $apiv2jwk, $jwkdev, $apikey, $apikeySandbox, $ulsSecret, $ulsReturn, $ulsDevReturn)

Update facility information. [Auth]

Update facility information. Requires JWT or Session Cookie. Must be ATM, DATM, or WM.

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


$apiInstance = new VATUSA\Client\Api\FacilityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Facility IATA ID
$url = "url_example"; // string | Change facility URL
$urlDev = "urlDev_example"; // string | Change facility Dev URL(s)
$uls2jwk = "uls2jwk_example"; // string | Request new ULS JWK
$apiv2jwk = "apiv2jwk_example"; // string | Request new APIv2 JWK
$jwkdev = true; // bool | Request new testing JWK
$apikey = "apikey_example"; // string | Request new API Key for facility
$apikeySandbox = "apikeySandbox_example"; // string | Request new Sandbox API Key     for facility
$ulsSecret = "ulsSecret_example"; // string | Request new ULS Secret, role     restricted
$ulsReturn = "ulsReturn_example"; // string | Set new ULS return point, role     restricted
$ulsDevReturn = "ulsDevReturn_example"; // string | Set new ULS developmental     return point

try {
    $result = $apiInstance->facilityIdPut($id, $url, $urlDev, $uls2jwk, $apiv2jwk, $jwkdev, $apikey, $apikeySandbox, $ulsSecret, $ulsReturn, $ulsDevReturn);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FacilityApi->facilityIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Facility IATA ID |
 **url** | **string**| Change facility URL | [optional]
 **urlDev** | **string**| Change facility Dev URL(s) | [optional]
 **uls2jwk** | **string**| Request new ULS JWK | [optional]
 **apiv2jwk** | **string**| Request new APIv2 JWK | [optional]
 **jwkdev** | **bool**| Request new testing JWK | [optional]
 **apikey** | **string**| Request new API Key for facility | [optional]
 **apikeySandbox** | **string**| Request new Sandbox API Key     for facility | [optional]
 **ulsSecret** | **string**| Request new ULS Secret, role     restricted | [optional]
 **ulsReturn** | **string**| Set new ULS return point, role     restricted | [optional]
 **ulsDevReturn** | **string**| Set new ULS developmental     return point | [optional]

### Return type

[**\VATUSA\Client\Model\InlineResponse2009**](../Model/InlineResponse2009.md)

### Authorization

[jwt](../../README.md#jwt), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **facilityIdRosterCidDelete**
> \VATUSA\Client\Model\OK facilityIdRosterCidDelete($id, $cid, $reason)

Delete member from facility roster. [Auth]

Delete member from facility roster.  JWT or Session Cookie required (required role: ATM,     DATM, VATUSA STAFF)

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


$apiInstance = new VATUSA\Client\Api\FacilityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Facility IATA ID
$cid = 56; // int | CID of controller
$reason = "reason_example"; // string | Reason for deletion

try {
    $result = $apiInstance->facilityIdRosterCidDelete($id, $cid, $reason);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FacilityApi->facilityIdRosterCidDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Facility IATA ID |
 **cid** | **int**| CID of controller |
 **reason** | **string**| Reason for deletion |

### Return type

[**\VATUSA\Client\Model\OK**](../Model/OK.md)

### Authorization

[jwt](../../README.md#jwt), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **facilityIdRosterGet**
> \VATUSA\Client\Model\User[] facilityIdRosterGet($id)

Get facility roster.

Get facility staff. Email field requires authentication as senior staff.     Broadcast opt-in status requires API key or staff member authentication. Prevent Staff Assignment field requires     authentication as senior staff.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new VATUSA\Client\Api\FacilityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Facility IATA ID

try {
    $result = $apiInstance->facilityIdRosterGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FacilityApi->facilityIdRosterGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Facility IATA ID |

### Return type

[**\VATUSA\Client\Model\User[]**](../Model/User.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **facilityIdTransfersGet**
> \VATUSA\Client\Model\InlineResponse20011 facilityIdTransfersGet($id)

Get pending transfers. [Key]

Get pending transfers. Requires API Key, Session Cookie, or JWT

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


$apiInstance = new VATUSA\Client\Api\FacilityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Facility IATA ID

try {
    $result = $apiInstance->facilityIdTransfersGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FacilityApi->facilityIdTransfersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Facility IATA ID |

### Return type

[**\VATUSA\Client\Model\InlineResponse20011**](../Model/InlineResponse20011.md)

### Authorization

[apikey](../../README.md#apikey), [jwt](../../README.md#jwt), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **facilityIdTransfersTransferIdPut**
> \VATUSA\Client\Model\OK facilityIdTransfersTransferIdPut($id, $transferId, $action, $reason)

Modify transfer request.  [Auth]

Modify transfer request.  JWT or Session cookie required. (required role: ATM, DATM,     VATUSA STAFF)

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


$apiInstance = new VATUSA\Client\Api\FacilityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Facility IATA ID
$transferId = 56; // int | Transfer ID
$action = "action_example"; // string | Action to take on transfer request. Valid values:     approve,reject
$reason = "reason_example"; // string | Reason for transfer request rejection     [required for rejections]

try {
    $result = $apiInstance->facilityIdTransfersTransferIdPut($id, $transferId, $action, $reason);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FacilityApi->facilityIdTransfersTransferIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Facility IATA ID |
 **transferId** | **int**| Transfer ID |
 **action** | **string**| Action to take on transfer request. Valid values:     approve,reject |
 **reason** | **string**| Reason for transfer request rejection     [required for rejections] | [optional]

### Return type

[**\VATUSA\Client\Model\OK**](../Model/OK.md)

### Authorization

[jwt](../../README.md#jwt), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **facilityIdUlsReturnsGet**
> \VATUSA\Client\Model\InlineResponse20012 facilityIdUlsReturnsGet($id)

Get ULS return paths. [Key]

Get ULS return paths. Requires API Key, Session Cookie, or JWT

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


$apiInstance = new VATUSA\Client\Api\FacilityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Facility IATA ID

try {
    $result = $apiInstance->facilityIdUlsReturnsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FacilityApi->facilityIdUlsReturnsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Facility IATA ID |

### Return type

[**\VATUSA\Client\Model\InlineResponse20012**](../Model/InlineResponse20012.md)

### Authorization

[apikey](../../README.md#apikey), [jwt](../../README.md#jwt), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **facilityIdUlsReturnsOrderDelete**
> \VATUSA\Client\Model\InlineResponse20013 facilityIdUlsReturnsOrderDelete($id, $order)

Remove ULS return path. [Key]

Remove ULS return path. Requires API Key, Session Cookie, or JWT

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


$apiInstance = new VATUSA\Client\Api\FacilityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Facility IATA ID
$order = 56; // int | Order number, used in ULS query

try {
    $result = $apiInstance->facilityIdUlsReturnsOrderDelete($id, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FacilityApi->facilityIdUlsReturnsOrderDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Facility IATA ID |
 **order** | **int**| Order number, used in ULS query |

### Return type

[**\VATUSA\Client\Model\InlineResponse20013**](../Model/InlineResponse20013.md)

### Authorization

[apikey](../../README.md#apikey), [jwt](../../README.md#jwt), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **facilityIdUlsReturnsPost**
> \VATUSA\Client\Model\InlineResponse20013 facilityIdUlsReturnsPost($id, $order, $url)

Add ULS return path. [Key]

Add new ULS return path. Requires API Key, Session Cookie, or JWT

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


$apiInstance = new VATUSA\Client\Api\FacilityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Facility IATA ID
$order = 56; // int | Order number, used in ULS query
$url = "url_example"; // string | Return URL

try {
    $result = $apiInstance->facilityIdUlsReturnsPost($id, $order, $url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FacilityApi->facilityIdUlsReturnsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Facility IATA ID |
 **order** | **int**| Order number, used in ULS query |
 **url** | **string**| Return URL |

### Return type

[**\VATUSA\Client\Model\InlineResponse20013**](../Model/InlineResponse20013.md)

### Authorization

[apikey](../../README.md#apikey), [jwt](../../README.md#jwt), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **facilityIdUlsReturnsPut**
> \VATUSA\Client\Model\InlineResponse20013 facilityIdUlsReturnsPut($id, $url)

Edit ULS return path. [Key]

Edit ULS return path. Requires API Key, Session Cookie, or JWT

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


$apiInstance = new VATUSA\Client\Api\FacilityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Facility IATA ID
$url = "url_example"; // string | Return URL

try {
    $result = $apiInstance->facilityIdUlsReturnsPut($id, $url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FacilityApi->facilityIdUlsReturnsPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Facility IATA ID |
 **url** | **string**| Return URL |

### Return type

[**\VATUSA\Client\Model\InlineResponse20013**](../Model/InlineResponse20013.md)

### Authorization

[apikey](../../README.md#apikey), [jwt](../../README.md#jwt), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

