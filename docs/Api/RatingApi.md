# VATUSA\Client\RatingApi

All URIs are relative to *https://api.vatusa.net/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**userCidRatingHistoryGet**](RatingApi.md#userCidRatingHistoryGet) | **GET** /user/{cid}/rating/history | Get user&#39;s rating history. [Key]
[**userCidRatingPost**](RatingApi.md#userCidRatingPost) | **POST** /user/{cid}/rating | Submit rating change. [Auth]


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


$apiInstance = new VATUSA\Client\Api\RatingApi(
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
    echo 'Exception when calling RatingApi->userCidRatingHistoryGet: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new VATUSA\Client\Api\RatingApi(
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
    echo 'Exception when calling RatingApi->userCidRatingPost: ', $e->getMessage(), PHP_EOL;
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

