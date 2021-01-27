# VATUSA\Client\CbtApi

All URIs are relative to *https://api.vatusa.net/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cbtBlockIdChapterIdDelete**](CbtApi.md#cbtBlockIdChapterIdDelete) | **DELETE** /cbt/{blockId}/{chapterId} | Delete chapter. [Auth]
[**cbtBlockIdChapterIdPut**](CbtApi.md#cbtBlockIdChapterIdPut) | **PUT** /cbt/{blockId}/{chapterId} | Edit chapter. [Auth]
[**cbtBlockIdGet**](CbtApi.md#cbtBlockIdGet) | **GET** /cbt/{blockId} | Get chapters in block.
[**cbtBlockIdPost**](CbtApi.md#cbtBlockIdPost) | **POST** /cbt/{blockId} | Create new chapter. [Auth]
[**cbtGet**](CbtApi.md#cbtGet) | **GET** /cbt | Get blocks filtered by facility.
[**cbtIdDelete**](CbtApi.md#cbtIdDelete) | **DELETE** /cbt/{id} | Delete block. [Auth]
[**cbtIdPut**](CbtApi.md#cbtIdPut) | **PUT** /cbt/{id} | Edit block. [Auth]
[**cbtPost**](CbtApi.md#cbtPost) | **POST** /cbt | Create new block. [Auth]
[**userCidCbtHistoryGet**](CbtApi.md#userCidCbtHistoryGet) | **GET** /user/{cid}/cbt/history | Get user&#39;s CBT history. [Key]
[**userCidCbtProgressBlockIdChapterIdPut**](CbtApi.md#userCidCbtProgressBlockIdChapterIdPut) | **PUT** /user/{cid}/cbt/progress/{blockId}/{chapterId} | Update user&#39;s CBT progress. [Key]
[**userCidCbtProgressBlockIdGet**](CbtApi.md#userCidCbtProgressBlockIdGet) | **GET** /user/{cid}/cbt/progress/{blockId} | Get user&#39;s CBT history for block ID. [Key]


# **cbtBlockIdChapterIdDelete**
> \VATUSA\Client\Model\OK cbtBlockIdChapterIdDelete($blockId, $chapterId)

Delete chapter. [Auth]

Delete chapter. Requires JWT or Session Cookie (required role: ATM, DATM, TA, VATUSA STAFF)

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


$apiInstance = new VATUSA\Client\Api\CbtApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockId = 56; // int | Block ID
$chapterId = 56; // int | Chapter ID

try {
    $result = $apiInstance->cbtBlockIdChapterIdDelete($blockId, $chapterId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CbtApi->cbtBlockIdChapterIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **blockId** | **int**| Block ID |
 **chapterId** | **int**| Chapter ID |

### Return type

[**\VATUSA\Client\Model\OK**](../Model/OK.md)

### Authorization

[jwt](../../README.md#jwt), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cbtBlockIdChapterIdPut**
> \VATUSA\Client\Model\OK cbtBlockIdChapterIdPut($blockId, $chapterId, $sortOrder, $name, $active, $url)

Edit chapter. [Auth]

Edit CBT Chapter. Requires JWT or Session Cookie (required role: ATM, DATM, TA, VATUSA STAFF)

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


$apiInstance = new VATUSA\Client\Api\CbtApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockId = "blockId_example"; // string | Block ID
$chapterId = 56; // int | Chapter ID
$sortOrder = 56; // int | Order location, sort lowest to      *                                      highest
$name = "name_example"; // string | Name of block
$active = true; // bool | Whether or not it is      *                                   active/public
$url = "url_example"; // string | Link to object (PDF, YouTube, or other      *                                embeddable object

try {
    $result = $apiInstance->cbtBlockIdChapterIdPut($blockId, $chapterId, $sortOrder, $name, $active, $url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CbtApi->cbtBlockIdChapterIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **blockId** | **string**| Block ID |
 **chapterId** | **int**| Chapter ID |
 **sortOrder** | **int**| Order location, sort lowest to      *                                      highest | [optional]
 **name** | **string**| Name of block | [optional]
 **active** | **bool**| Whether or not it is      *                                   active/public | [optional]
 **url** | **string**| Link to object (PDF, YouTube, or other      *                                embeddable object | [optional]

### Return type

[**\VATUSA\Client\Model\OK**](../Model/OK.md)

### Authorization

[jwt](../../README.md#jwt), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cbtBlockIdGet**
> \VATUSA\Client\Model\InlineResponse2002 cbtBlockIdGet($blockId)

Get chapters in block.

Get Chapters for specified CBT Block.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new VATUSA\Client\Api\CbtApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$blockId = 56; // int | Block ID

try {
    $result = $apiInstance->cbtBlockIdGet($blockId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CbtApi->cbtBlockIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **blockId** | **int**| Block ID |

### Return type

[**\VATUSA\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cbtBlockIdPost**
> \VATUSA\Client\Model\OK cbtBlockIdPost($blockId, $facility, $name, $url)

Create new chapter. [Auth]

Create new chapter. Requires JWT or Session Cookie (required role: ATM, DATM, TA, VATUSA      *     STAFF)

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


$apiInstance = new VATUSA\Client\Api\CbtApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockId = 56; // int | Block ID
$facility = "facility_example"; // string | Facility IATA      *                                     ID
$name = "name_example"; // string | Name of block
$url = "url_example"; // string | URL of chapter      *                                object

try {
    $result = $apiInstance->cbtBlockIdPost($blockId, $facility, $name, $url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CbtApi->cbtBlockIdPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **blockId** | **int**| Block ID |
 **facility** | **string**| Facility IATA      *                                     ID |
 **name** | **string**| Name of block |
 **url** | **string**| URL of chapter      *                                object |

### Return type

[**\VATUSA\Client\Model\OK**](../Model/OK.md)

### Authorization

[jwt](../../README.md#jwt), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cbtGet**
> \VATUSA\Client\Model\InlineResponse2001 cbtGet($facility)

Get blocks filtered by facility.

Get CBT Blocks filtered by facility.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new VATUSA\Client\Api\CbtApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$facility = "facility_example"; // string | Filter by facility id

try {
    $result = $apiInstance->cbtGet($facility);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CbtApi->cbtGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **facility** | **string**| Filter by facility id | [optional]

### Return type

[**\VATUSA\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cbtIdDelete**
> \VATUSA\Client\Model\OK cbtIdDelete($id)

Delete block. [Auth]

Delete block. Requires JWT or Session Cookie (required role: ATM, DATM, TA, VATUSA STAFF)

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


$apiInstance = new VATUSA\Client\Api\CbtApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Block ID

try {
    $result = $apiInstance->cbtIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CbtApi->cbtIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Block ID |

### Return type

[**\VATUSA\Client\Model\OK**](../Model/OK.md)

### Authorization

[jwt](../../README.md#jwt), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cbtIdPut**
> \VATUSA\Client\Model\OK cbtIdPut($id, $sortOrder, $name, $visible, $level)

Edit block. [Auth]

Edit CBT Block. Requires JWT or Session Cookie (required role: ATM, DATM, TA, VATUSA STAFF)

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


$apiInstance = new VATUSA\Client\Api\CbtApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Block ID
$sortOrder = 56; // int | Order location, sort lowest to      *                                      highest
$name = "name_example"; // string | Name of block
$visible = true; // bool | Whether or not it is      *                                    active/public
$level = "level_example"; // string | Access level (plain text options:      *                                  All, S1, C1, I1, Staff, Senior Staff)

try {
    $result = $apiInstance->cbtIdPut($id, $sortOrder, $name, $visible, $level);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CbtApi->cbtIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Block ID |
 **sortOrder** | **int**| Order location, sort lowest to      *                                      highest | [optional]
 **name** | **string**| Name of block | [optional]
 **visible** | **bool**| Whether or not it is      *                                    active/public | [optional]
 **level** | **string**| Access level (plain text options:      *                                  All, S1, C1, I1, Staff, Senior Staff) | [optional]

### Return type

[**\VATUSA\Client\Model\OK**](../Model/OK.md)

### Authorization

[jwt](../../README.md#jwt), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cbtPost**
> \VATUSA\Client\Model\OK cbtPost($facility, $name, $level, $visible)

Create new block. [Auth]

Create new block. Requires JWT or Session Cookie (required role: ATM, DATM, TA, VATUSA STAFF)

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


$apiInstance = new VATUSA\Client\Api\CbtApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$facility = "facility_example"; // string | Facility IATA      *                                     ID
$name = "name_example"; // string | Name of block
$level = "level_example"; // string | Rating level - ALL,      *                                  S1, C1, I1, Staff, Senior Staff
$visible = true; // bool | Block is      *                                    visible

try {
    $result = $apiInstance->cbtPost($facility, $name, $level, $visible);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CbtApi->cbtPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **facility** | **string**| Facility IATA      *                                     ID |
 **name** | **string**| Name of block |
 **level** | **string**| Rating level - ALL,      *                                  S1, C1, I1, Staff, Senior Staff | [optional]
 **visible** | **bool**| Block is      *                                    visible | [optional]

### Return type

[**\VATUSA\Client\Model\OK**](../Model/OK.md)

### Authorization

[jwt](../../README.md#jwt), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userCidCbtHistoryGet**
> \VATUSA\Client\Model\TrainingProgress[] userCidCbtHistoryGet($cid)

Get user's CBT history. [Key]

Get user's CBT history. Requires API Key, authorization as senior staff, or self      *     authentication.

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


$apiInstance = new VATUSA\Client\Api\CbtApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cid = 56; // int | CERT ID

try {
    $result = $apiInstance->userCidCbtHistoryGet($cid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CbtApi->userCidCbtHistoryGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cid** | **int**| CERT ID |

### Return type

[**\VATUSA\Client\Model\TrainingProgress[]**](../Model/TrainingProgress.md)

### Authorization

[apikey](../../README.md#apikey), [jwt](../../README.md#jwt), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userCidCbtProgressBlockIdChapterIdPut**
> \VATUSA\Client\Model\OK userCidCbtProgressBlockIdChapterIdPut($cid, $blockId, $chapterId)

Update user's CBT progress. [Key]

Marks chapter as completed. Requires API Key, JWT, or Session Cookie (must originate from     user if not using API Key)

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


$apiInstance = new VATUSA\Client\Api\CbtApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cid = 56; // int | CERT ID
$blockId = 56; // int | Block ID
$chapterId = 56; // int | Mark progress of specific Chapter     ID

try {
    $result = $apiInstance->userCidCbtProgressBlockIdChapterIdPut($cid, $blockId, $chapterId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CbtApi->userCidCbtProgressBlockIdChapterIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cid** | **int**| CERT ID |
 **blockId** | **int**| Block ID |
 **chapterId** | **int**| Mark progress of specific Chapter     ID |

### Return type

[**\VATUSA\Client\Model\OK**](../Model/OK.md)

### Authorization

[apikey](../../README.md#apikey), [jwt](../../README.md#jwt), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userCidCbtProgressBlockIdGet**
> \VATUSA\Client\Model\InlineResponse20025[] userCidCbtProgressBlockIdGet($cid, $blockId)

Get user's CBT history for block ID. [Key]

Get user's CBT history for block ID. Requires API Key, authorization as senior staff, or self      *     authentication.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new VATUSA\Client\Api\CbtApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cid = 56; // int | CERT ID
$blockId = 56; // int | Get progress of specific Block ID

try {
    $result = $apiInstance->userCidCbtProgressBlockIdGet($cid, $blockId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CbtApi->userCidCbtProgressBlockIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cid** | **int**| CERT ID |
 **blockId** | **int**| Get progress of specific Block ID |

### Return type

[**\VATUSA\Client\Model\InlineResponse20025[]**](../Model/InlineResponse20025.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

