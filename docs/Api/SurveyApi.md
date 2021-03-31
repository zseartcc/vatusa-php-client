# VATUSA\Client\SurveyApi

All URIs are relative to *https://api.vatusa.net/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**surveyIdAssignCidPost**](SurveyApi.md#surveyIdAssignCidPost) | **POST** /survey/{id}/assign/{cid} | Assign a survey to cid. [Private]
[**surveyIdGet**](SurveyApi.md#surveyIdGet) | **GET** /survey/{id} | Get survey questions. [Private]
[**surveyIdPost**](SurveyApi.md#surveyIdPost) | **POST** /survey/{id} | Submit survey. [Private]


# **surveyIdAssignCidPost**
> \VATUSA\Client\Model\OK surveyIdAssignCidPost($id, $cid)

Assign a survey to cid. [Private]

Assign a survey to cid (CORS Restricted).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new VATUSA\Client\Api\SurveyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Survey ID
$cid = 56; // int | CERT ID

try {
    $result = $apiInstance->surveyIdAssignCidPost($id, $cid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyApi->surveyIdAssignCidPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Survey ID |
 **cid** | **int**| CERT ID |

### Return type

[**\VATUSA\Client\Model\OK**](../Model/OK.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyIdGet**
> \VATUSA\Client\Model\InlineResponse20020 surveyIdGet($id)

Get survey questions. [Private]

Get survey questions (CORS Restricted).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new VATUSA\Client\Api\SurveyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Survey Assignment ID

try {
    $result = $apiInstance->surveyIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyApi->surveyIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Survey Assignment ID |

### Return type

[**\VATUSA\Client\Model\InlineResponse20020**](../Model/InlineResponse20020.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyIdPost**
> \VATUSA\Client\Model\OK surveyIdPost($id, $data)

Submit survey. [Private]

Submit survey (CORS Restricted).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new VATUSA\Client\Api\SurveyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Survey Assignment ID
$data = "data_example"; // string | 

try {
    $result = $apiInstance->surveyIdPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyApi->surveyIdPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Survey Assignment ID |
 **data** | **string**|  |

### Return type

[**\VATUSA\Client\Model\OK**](../Model/OK.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

