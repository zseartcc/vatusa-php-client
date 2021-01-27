# VATUSA\Client\UserApi

All URIs are relative to *https://api.vatusa.net/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**examIdAssignCidDelete**](UserApi.md#examIdAssignCidDelete) | **DELETE** /exam/{id}/assign/{cid} | Delete exam assignment. [Auth]
[**examIdAssignCidPost**](UserApi.md#examIdAssignCidPost) | **POST** /exam/{id}/assign/{cid} | Assign exam. [Auth]
[**userCidCbtHistoryGet**](UserApi.md#userCidCbtHistoryGet) | **GET** /user/{cid}/cbt/history | Get user&#39;s CBT history. [Key]
[**userCidCbtProgressBlockIdChapterIdPut**](UserApi.md#userCidCbtProgressBlockIdChapterIdPut) | **PUT** /user/{cid}/cbt/progress/{blockId}/{chapterId} | Update user&#39;s CBT progress. [Key]
[**userCidCbtProgressBlockIdGet**](UserApi.md#userCidCbtProgressBlockIdGet) | **GET** /user/{cid}/cbt/progress/{blockId} | Get user&#39;s CBT history for block ID. [Key]
[**userCidExamHistoryGet**](UserApi.md#userCidExamHistoryGet) | **GET** /user/{cid}/exam/history | Get user&#39;s exam history. [Key]
[**userCidGet**](UserApi.md#userCidGet) | **GET** /user/{cid} | Get user&#39;s information.
[**userCidLogGet**](UserApi.md#userCidLogGet) | **GET** /user/{cid}/log | Get controller&#39;s action log. [Private]
[**userCidLogPost**](UserApi.md#userCidLogPost) | **POST** /user/{cid}/log | Submit entry to controller&#39;s action log. [Private]
[**userCidRatingHistoryGet**](UserApi.md#userCidRatingHistoryGet) | **GET** /user/{cid}/rating/history | Get user&#39;s rating history. [Key]
[**userCidRatingPost**](UserApi.md#userCidRatingPost) | **POST** /user/{cid}/rating | Submit rating change. [Auth]
[**userCidRolesFacilityRoleDelete**](UserApi.md#userCidRolesFacilityRoleDelete) | **DELETE** /user/{cid}/roles/{facility}/{role} | Delete role. [Auth]
[**userCidRolesFacilityRolePost**](UserApi.md#userCidRolesFacilityRolePost) | **POST** /user/{cid}/roles/{facility}/{role} | Assign new role. [Auth]
[**userCidTrainingOtsEvalPost**](UserApi.md#userCidTrainingOtsEvalPost) | **POST** /user/{cid}/training/otsEval | Post new OTS Eval for a user. [Private]
[**userCidTrainingOtsEvalsGet**](UserApi.md#userCidTrainingOtsEvalsGet) | **GET** /user/{cid}/training/otsEvals | Get user&#39;s OTS evaluations. [Private]
[**userCidTrainingRecordsGet**](UserApi.md#userCidTrainingRecordsGet) | **GET** /user/{cid}/training/records | Get user&#39;s training records. [Key]
[**userCidTransferChecklistGet**](UserApi.md#userCidTransferChecklistGet) | **GET** /user/{cid}/transfer/checklist | Get user&#39;s transfer checklist. [Key]
[**userCidTransferHistoryGet**](UserApi.md#userCidTransferHistoryGet) | **GET** /user/{cid}/transfer/history | Get user&#39;s transfer history. [Key]
[**userCidTransferPost**](UserApi.md#userCidTransferPost) | **POST** /user/{cid}/transfer | Submit transfer request. [Private]
[**userRolesFacilityRoleGet**](UserApi.md#userRolesFacilityRoleGet) | **GET** /user/roles/{facility}/{role} | Get users assigned to specific staff role.


# **examIdAssignCidDelete**
> \VATUSA\Client\Model\OK examIdAssignCidDelete($id, $cid)

Delete exam assignment. [Auth]

Delete user's exam assignment. Requires JWT or Session Cookie.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new VATUSA\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Exam ID Number
$cid = 56; // int | CERT ID

try {
    $result = $apiInstance->examIdAssignCidDelete($id, $cid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->examIdAssignCidDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Exam ID Number |
 **cid** | **int**| CERT ID |

### Return type

[**\VATUSA\Client\Model\OK**](../Model/OK.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **examIdAssignCidPost**
> \VATUSA\Client\Model\OK examIdAssignCidPost($id, $cid, $expire)

Assign exam. [Auth]

Assign exam to specified controller. Requires JWT or Session Cookie. Must be instructor, senior            staff or VATUSA staff.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new VATUSA\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Exam ID
$cid = 56; // int | VATSIM ID
$expire = 56; // int | Days until expiration, 7      *                                   default

try {
    $result = $apiInstance->examIdAssignCidPost($id, $cid, $expire);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->examIdAssignCidPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Exam ID |
 **cid** | **int**| VATSIM ID |
 **expire** | **int**| Days until expiration, 7      *                                   default | [optional]

### Return type

[**\VATUSA\Client\Model\OK**](../Model/OK.md)

### Authorization

No authorization required

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


$apiInstance = new VATUSA\Client\Api\UserApi(
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
    echo 'Exception when calling UserApi->userCidCbtHistoryGet: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new VATUSA\Client\Api\UserApi(
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
    echo 'Exception when calling UserApi->userCidCbtProgressBlockIdChapterIdPut: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new VATUSA\Client\Api\UserApi(
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
    echo 'Exception when calling UserApi->userCidCbtProgressBlockIdGet: ', $e->getMessage(), PHP_EOL;
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

# **userCidExamHistoryGet**
> \VATUSA\Client\Model\ExamResults[] userCidExamHistoryGet($cid)

Get user's exam history. [Key]

Get user's exam history. Requires API Key, JWT, or Session Cookie (required role: [N/A     for API Key] ATM, DATM, TA, INS, VATUSA STAFF)

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


$apiInstance = new VATUSA\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cid = 56; // int | CERT ID

try {
    $result = $apiInstance->userCidExamHistoryGet($cid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userCidExamHistoryGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cid** | **int**| CERT ID |

### Return type

[**\VATUSA\Client\Model\ExamResults[]**](../Model/ExamResults.md)

### Authorization

[apikey](../../README.md#apikey), [jwt](../../README.md#jwt), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userCidGet**
> \VATUSA\Client\Model\User userCidGet($cid)

Get user's information.

Get user's information. Email field and broadcast opt-in status require authentication as staff member or API key.     Prevent staff assigment flag requires authentication as senior staff.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new VATUSA\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cid = "cid_example"; // string | Cert ID

try {
    $result = $apiInstance->userCidGet($cid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userCidGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cid** | **string**| Cert ID |

### Return type

[**\VATUSA\Client\Model\User**](../Model/User.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userCidLogGet**
> \VATUSA\Client\Model\Action[] userCidLogGet($cid, $entry)

Get controller's action log. [Private]

Get controller's action log. CORS Restricted. Requires JWT or Session Cookie (required     role: ATM, DATM, VATUSA STAFF)

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


$apiInstance = new VATUSA\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cid = 56; // int | CERT ID
$entry = "entry_example"; // string | Entry to log

try {
    $result = $apiInstance->userCidLogGet($cid, $entry);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userCidLogGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cid** | **int**| CERT ID |
 **entry** | **string**| Entry to log |

### Return type

[**\VATUSA\Client\Model\Action[]**](../Model/Action.md)

### Authorization

[jwt](../../README.md#jwt), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userCidLogPost**
> \VATUSA\Client\Model\OK userCidLogPost($cid, $entry)

Submit entry to controller's action log. [Private]

Submit entry to controller's action log. CORS Restricted. Requires JWT or Session Cookie     (required role: ATM, DATM, VATUSA STAFF)

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


$apiInstance = new VATUSA\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cid = 56; // int | CERT ID
$entry = "entry_example"; // string | Entry to log

try {
    $result = $apiInstance->userCidLogPost($cid, $entry);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userCidLogPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cid** | **int**| CERT ID |
 **entry** | **string**| Entry to log |

### Return type

[**\VATUSA\Client\Model\OK**](../Model/OK.md)

### Authorization

[jwt](../../README.md#jwt), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userCidRatingHistoryGet**
> \VATUSA\Client\Model\Promotion[] userCidRatingHistoryGet($cid)

Get user's rating history. [Key]

Get user's rating history. Requires API Key, JWT or Session Cookie (required role if no apikey:      *     ATM, DATM, TA, INS, VATUSA STAFF)

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


$apiInstance = new VATUSA\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cid = 56; // int | CERT ID

try {
    $result = $apiInstance->userCidRatingHistoryGet($cid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userCidRatingHistoryGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cid** | **int**| CERT ID |

### Return type

[**\VATUSA\Client\Model\Promotion[]**](../Model/Promotion.md)

### Authorization

[apikey](../../README.md#apikey), [jwt](../../README.md#jwt), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userCidRatingPost**
> \VATUSA\Client\Model\OK userCidRatingPost($cid, $rating, $examDate, $examiner, $position)

Submit rating change. [Auth]

Submit rating change. Requires JWT or Session Cookie (required role: ATM, DATM, TA, INS,     VATUSA STAFF)

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


$apiInstance = new VATUSA\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cid = 56; // int | CERT ID
$rating = "rating_example"; // string | Rating to change     rating to
$examDate = "examDate_example"; // string | Date of exam (format, YYYY-MM-DD)     required for C1 and below
$examiner = 56; // int | CID of Examiner, if not provided     or null will default to authenticated user, required for C1 and below
$position = "position_example"; // string | Position sat during exam,     required for C1 and below

try {
    $result = $apiInstance->userCidRatingPost($cid, $rating, $examDate, $examiner, $position);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userCidRatingPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cid** | **int**| CERT ID |
 **rating** | **string**| Rating to change     rating to |
 **examDate** | **string**| Date of exam (format, YYYY-MM-DD)     required for C1 and below | [optional]
 **examiner** | **int**| CID of Examiner, if not provided     or null will default to authenticated user, required for C1 and below | [optional]
 **position** | **string**| Position sat during exam,     required for C1 and below | [optional]

### Return type

[**\VATUSA\Client\Model\OK**](../Model/OK.md)

### Authorization

[jwt](../../README.md#jwt), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userCidRolesFacilityRoleDelete**
> \VATUSA\Client\Model\OK userCidRolesFacilityRoleDelete($cid, $facility, $role)

Delete role. [Auth]

Delete role. Requires JWT or Session Cookie (required role: for FE, EC, WM roles: ATM,     DATM; for MTR roles: TA; for all other roles: VATUSA STAFF)

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


$apiInstance = new VATUSA\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cid = 56; // int | CERT ID
$facility = "facility_example"; // string | Facility IATA ID
$role = "role_example"; // string | Role

try {
    $result = $apiInstance->userCidRolesFacilityRoleDelete($cid, $facility, $role);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userCidRolesFacilityRoleDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cid** | **int**| CERT ID |
 **facility** | **string**| Facility IATA ID |
 **role** | **string**| Role |

### Return type

[**\VATUSA\Client\Model\OK**](../Model/OK.md)

### Authorization

[jwt](../../README.md#jwt), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userCidRolesFacilityRolePost**
> \VATUSA\Client\Model\OK userCidRolesFacilityRolePost($cid, $facility, $role)

Assign new role. [Auth]

Assign new role. Requires JWT or Session Cookie (required roles :: for FE, EC, WM:     ATM, DATM; for MTR: TA; for all other roles: VATUSA STAFF)

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


$apiInstance = new VATUSA\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cid = 56; // int | CERT ID
$facility = "facility_example"; // string | Facility IATA ID
$role = "role_example"; // string | Role

try {
    $result = $apiInstance->userCidRolesFacilityRolePost($cid, $facility, $role);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userCidRolesFacilityRolePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cid** | **int**| CERT ID |
 **facility** | **string**| Facility IATA ID |
 **role** | **string**| Role |

### Return type

[**\VATUSA\Client\Model\OK**](../Model/OK.md)

### Authorization

[jwt](../../README.md#jwt), [session](../../README.md#session)

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


$apiInstance = new VATUSA\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cid = 56; // int | Controller ID

try {
    $apiInstance->userCidTrainingOtsEvalPost($cid);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userCidTrainingOtsEvalPost: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new VATUSA\Client\Api\UserApi(
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
    echo 'Exception when calling UserApi->userCidTrainingOtsEvalsGet: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new VATUSA\Client\Api\UserApi(
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
    echo 'Exception when calling UserApi->userCidTrainingRecordsGet: ', $e->getMessage(), PHP_EOL;
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

# **userCidTransferChecklistGet**
> \VATUSA\Client\Model\InlineResponse20024[] userCidTransferChecklistGet($cid)

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


$apiInstance = new VATUSA\Client\Api\UserApi(
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
    echo 'Exception when calling UserApi->userCidTransferChecklistGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cid** | **int**| CERT ID |

### Return type

[**\VATUSA\Client\Model\InlineResponse20024[]**](../Model/InlineResponse20024.md)

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


$apiInstance = new VATUSA\Client\Api\UserApi(
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
    echo 'Exception when calling UserApi->userCidTransferHistoryGet: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new VATUSA\Client\Api\UserApi(
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
    echo 'Exception when calling UserApi->userCidTransferPost: ', $e->getMessage(), PHP_EOL;
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

# **userRolesFacilityRoleGet**
> \VATUSA\Client\Model\InlineResponse20023[] userRolesFacilityRoleGet($facility, $role)

Get users assigned to specific staff role.

Get users assigned to specific staff role

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new VATUSA\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$facility = "facility_example"; // string | Facility IATA ID
$role = "role_example"; // string | Role

try {
    $result = $apiInstance->userRolesFacilityRoleGet($facility, $role);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userRolesFacilityRoleGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **facility** | **string**| Facility IATA ID |
 **role** | **string**| Role |

### Return type

[**\VATUSA\Client\Model\InlineResponse20023[]**](../Model/InlineResponse20023.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

