# VATUSA\Client\TrainingApi

All URIs are relative to *https://api.vatusa.net/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**facilityFacilityTrainingRecordsGet**](TrainingApi.md#facilityFacilityTrainingRecordsGet) | **GET** /facility/{facility}/training/records | Get facility&#39;s training records. [Key]
[**trainingEvalsGet**](TrainingApi.md#trainingEvalsGet) | **GET** /training/evals | Get all OTS evaluations. [Private]
[**trainingOtsEvalRecordIDGet**](TrainingApi.md#trainingOtsEvalRecordIDGet) | **GET** /training/otsEval/{recordID} | Get OTS Eval content. [Private]
[**trainingRecordRecordIDDelete**](TrainingApi.md#trainingRecordRecordIDDelete) | **DELETE** /training/record/{recordID} | Delete training record. [Key]
[**trainingRecordRecordIDGet**](TrainingApi.md#trainingRecordRecordIDGet) | **GET** /training/record/{recordID} | Get training record. [Key]
[**trainingRecordRecordIDOtsEvalGet**](TrainingApi.md#trainingRecordRecordIDOtsEvalGet) | **GET** /training/record/{recordID}/otsEval | Get attached OTS eval. [Private]
[**trainingRecordRecordIDPut**](TrainingApi.md#trainingRecordRecordIDPut) | **PUT** /training/record/{recordID} | Edit training record. [Key]
[**trainingRecordsGet**](TrainingApi.md#trainingRecordsGet) | **GET** /training/records | Get all training records. [Private]
[**userCidTrainingOtsEvalPost**](TrainingApi.md#userCidTrainingOtsEvalPost) | **POST** /user/{cid}/training/otsEval | Post new OTS Eval for a user. [Private]
[**userCidTrainingOtsEvalsGet**](TrainingApi.md#userCidTrainingOtsEvalsGet) | **GET** /user/{cid}/training/otsEvals | Get user&#39;s OTS evaluations. [Private]
[**userCidTrainingRecordPost**](TrainingApi.md#userCidTrainingRecordPost) | **POST** /user/{cid}/training/record | Submit new training record. [Key]
[**userCidTrainingRecordsGet**](TrainingApi.md#userCidTrainingRecordsGet) | **GET** /user/{cid}/training/records | Get user&#39;s training records. [Key]


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


$apiInstance = new VATUSA\Client\Api\TrainingApi(
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
    echo 'Exception when calling TrainingApi->facilityFacilityTrainingRecordsGet: ', $e->getMessage(), PHP_EOL;
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

# **trainingEvalsGet**
> \VATUSA\Client\Model\Otseval trainingEvalsGet($ratingId)

Get all OTS evaluations. [Private]

Get all OTS evaluations. This does not include the actual content. CORS Restricted.

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


$apiInstance = new VATUSA\Client\Api\TrainingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ratingId = 56; // int | Filter by rating ID

try {
    $result = $apiInstance->trainingEvalsGet($ratingId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrainingApi->trainingEvalsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ratingId** | **int**| Filter by rating ID |

### Return type

[**\VATUSA\Client\Model\Otseval**](../Model/Otseval.md)

### Authorization

[apikey](../../README.md#apikey), [jwt](../../README.md#jwt), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **trainingOtsEvalRecordIDGet**
> trainingOtsEvalRecordIDGet($recordID)

Get OTS Eval content. [Private]

Get content of OTS Eval. CORS Restricted.

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


$apiInstance = new VATUSA\Client\Api\TrainingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$recordID = 56; // int | Record ID

try {
    $apiInstance->trainingOtsEvalRecordIDGet($recordID);
} catch (Exception $e) {
    echo 'Exception when calling TrainingApi->trainingOtsEvalRecordIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **recordID** | **int**| Record ID |

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **trainingRecordRecordIDDelete**
> trainingRecordRecordIDDelete($recordID)

Delete training record. [Key]

Delete training record. Must have APIKey or be Senior Staff, Training Staff, or the student.

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


$apiInstance = new VATUSA\Client\Api\TrainingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$recordID = 56; // int | Record ID

try {
    $apiInstance->trainingRecordRecordIDDelete($recordID);
} catch (Exception $e) {
    echo 'Exception when calling TrainingApi->trainingRecordRecordIDDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **recordID** | **int**| Record ID |

### Return type

void (empty response body)

### Authorization

[apikey](../../README.md#apikey), [jwt](../../README.md#jwt), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **trainingRecordRecordIDGet**
> \VATUSA\Client\Model\TrainingRecord trainingRecordRecordIDGet($recordID)

Get training record. [Key]

Get content of training record. Must have APIKey or be Senior Staff, Training Staff, or the student.

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


$apiInstance = new VATUSA\Client\Api\TrainingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$recordID = 56; // int | Record ID

try {
    $result = $apiInstance->trainingRecordRecordIDGet($recordID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrainingApi->trainingRecordRecordIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **recordID** | **int**| Record ID |

### Return type

[**\VATUSA\Client\Model\TrainingRecord**](../Model/TrainingRecord.md)

### Authorization

[apikey](../../README.md#apikey), [jwt](../../README.md#jwt), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **trainingRecordRecordIDOtsEvalGet**
> trainingRecordRecordIDOtsEvalGet($recordID)

Get attached OTS eval. [Private]

Get content of OTS Eval attached to given record. CORS Restricted.

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


$apiInstance = new VATUSA\Client\Api\TrainingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$recordID = 56; // int | Record ID

try {
    $apiInstance->trainingRecordRecordIDOtsEvalGet($recordID);
} catch (Exception $e) {
    echo 'Exception when calling TrainingApi->trainingRecordRecordIDOtsEvalGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **recordID** | **int**| Record ID |

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **trainingRecordRecordIDPut**
> \VATUSA\Client\Model\InlineResponse20021 trainingRecordRecordIDPut($recordID, $body)

Edit training record. [Key]

Edit training record. Requires API Key, JWT, or Session Cookie (required roles: [N/A for API Key] Senior Staff, Training Staff)

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


$apiInstance = new VATUSA\Client\Api\TrainingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$recordID = 56; // int | Record ID
$body = new \VATUSA\Client\Model\TrainingRecord(); // \VATUSA\Client\Model\TrainingRecord | 

try {
    $result = $apiInstance->trainingRecordRecordIDPut($recordID, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrainingApi->trainingRecordRecordIDPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **recordID** | **int**| Record ID |
 **body** | [**\VATUSA\Client\Model\TrainingRecord**](../Model/TrainingRecord.md)|  |

### Return type

[**\VATUSA\Client\Model\InlineResponse20021**](../Model/InlineResponse20021.md)

### Authorization

[apikey](../../README.md#apikey), [jwt](../../README.md#jwt), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **trainingRecordsGet**
> \VATUSA\Client\Model\TrainingRecord trainingRecordsGet()

Get all training records. [Private]

Get all training records. CORS Restricted.

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


$apiInstance = new VATUSA\Client\Api\TrainingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->trainingRecordsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrainingApi->trainingRecordsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\VATUSA\Client\Model\TrainingRecord**](../Model/TrainingRecord.md)

### Authorization

[apikey](../../README.md#apikey), [jwt](../../README.md#jwt), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userCidTrainingOtsEvalPost**
> userCidTrainingOtsEvalPost($cid)

Post new OTS Eval for a user. [Private]

Post new OTS Eval for a user. CORS Restricted.

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


$apiInstance = new VATUSA\Client\Api\TrainingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cid = 56; // int | Controller ID

try {
    $apiInstance->userCidTrainingOtsEvalPost($cid);
} catch (Exception $e) {
    echo 'Exception when calling TrainingApi->userCidTrainingOtsEvalPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cid** | **int**| Controller ID |

### Return type

void (empty response body)

### Authorization

[apikey](../../README.md#apikey), [jwt](../../README.md#jwt), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userCidTrainingOtsEvalsGet**
> \VATUSA\Client\Model\Otseval userCidTrainingOtsEvalsGet($cid, $ratingId)

Get user's OTS evaluations. [Private]

Get users training evaluations. CORS Restricted.

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


$apiInstance = new VATUSA\Client\Api\TrainingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cid = 56; // int | Controller ID
$ratingId = 56; // int | Filter by rating ID

try {
    $result = $apiInstance->userCidTrainingOtsEvalsGet($cid, $ratingId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrainingApi->userCidTrainingOtsEvalsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cid** | **int**| Controller ID |
 **ratingId** | **int**| Filter by rating ID |

### Return type

[**\VATUSA\Client\Model\Otseval**](../Model/Otseval.md)

### Authorization

[apikey](../../README.md#apikey), [jwt](../../README.md#jwt), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userCidTrainingRecordPost**
> \VATUSA\Client\Model\InlineResponse20021 userCidTrainingRecordPost($cid, $body)

Submit new training record. [Key]

Submit new training record. Requires API Key, JWT, or Session Cookie (required roles:     [N/A for API Key] Senior Staff, Training Staff)

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


$apiInstance = new VATUSA\Client\Api\TrainingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cid = 56; // int | Controller ID
$body = new \VATUSA\Client\Model\TrainingRecord(); // \VATUSA\Client\Model\TrainingRecord | 

try {
    $result = $apiInstance->userCidTrainingRecordPost($cid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrainingApi->userCidTrainingRecordPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cid** | **int**| Controller ID |
 **body** | [**\VATUSA\Client\Model\TrainingRecord**](../Model/TrainingRecord.md)|  |

### Return type

[**\VATUSA\Client\Model\InlineResponse20021**](../Model/InlineResponse20021.md)

### Authorization

[apikey](../../README.md#apikey), [jwt](../../README.md#jwt), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userCidTrainingRecordsGet**
> map[string,\VATUSA\Client\Model\TrainingRecord] userCidTrainingRecordsGet($cid)

Get user's training records. [Key]

Get all user's training records. Must have APIKey or be Senior Staff, Training Staff, or the student.

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


$apiInstance = new VATUSA\Client\Api\TrainingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cid = 56; // int | Controller ID

try {
    $result = $apiInstance->userCidTrainingRecordsGet($cid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrainingApi->userCidTrainingRecordsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cid** | **int**| Controller ID |

### Return type

[**map[string,\VATUSA\Client\Model\TrainingRecord]**](../Model/TrainingRecord.md)

### Authorization

[apikey](../../README.md#apikey), [jwt](../../README.md#jwt), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

