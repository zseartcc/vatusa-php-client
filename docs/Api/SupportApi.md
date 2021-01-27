# VATUSA\Client\SupportApi

All URIs are relative to *https://api.vatusa.net/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**supportKbCategoryidQuestionidDelete**](SupportApi.md#supportKbCategoryidQuestionidDelete) | **DELETE** /support/kb/{categoryid}/{questionid} | Delete knowledgebase question. [Auth]
[**supportKbCategoryidQuestionidPut**](SupportApi.md#supportKbCategoryidQuestionidPut) | **PUT** /support/kb/{categoryid}/{questionid} | Modify knowledgebase question. [Auth]
[**supportKbGet**](SupportApi.md#supportKbGet) | **GET** /support/kb | Get knowledgebase list.
[**supportKbIdDelete**](SupportApi.md#supportKbIdDelete) | **DELETE** /support/kb/{id} | Delete knowledgebase category. [Auth]
[**supportKbIdPost**](SupportApi.md#supportKbIdPost) | **POST** /support/kb/{id} | Create knowledgebase question. [Auth]
[**supportKbIdPut**](SupportApi.md#supportKbIdPut) | **PUT** /support/kb/{id} | Modify knowledgebase category. [Auth]
[**supportKbPost**](SupportApi.md#supportKbPost) | **POST** /support/kb | Create knowledgebase category. [Auth]
[**supportTicketsDeptsDeptStaffGet**](SupportApi.md#supportTicketsDeptsDeptStaffGet) | **GET** /support/tickets/depts/{dept}/staff | Get list of assignable staff members for department.
[**supportTicketsDeptsGet**](SupportApi.md#supportTicketsDeptsGet) | **GET** /support/tickets/depts | Get list of assignable departments.


# **supportKbCategoryidQuestionidDelete**
> \VATUSA\Client\Model\OK supportKbCategoryidQuestionidDelete($categoryid, $questionid)

Delete knowledgebase question. [Auth]

Delete knowledgebase question. Requires JWT or Session Cookie and VATUSA Staff role.

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


$apiInstance = new VATUSA\Client\Api\SupportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$categoryid = 56; // int | ID of Knowledgebase Category
$questionid = 56; // int | ID of question

try {
    $result = $apiInstance->supportKbCategoryidQuestionidDelete($categoryid, $questionid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupportApi->supportKbCategoryidQuestionidDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **categoryid** | **int**| ID of Knowledgebase Category |
 **questionid** | **int**| ID of question |

### Return type

[**\VATUSA\Client\Model\OK**](../Model/OK.md)

### Authorization

[jwt](../../README.md#jwt), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **supportKbCategoryidQuestionidPut**
> \VATUSA\Client\Model\OK supportKbCategoryidQuestionidPut($categoryid, $questionid, $question, $answer, $category, $order)

Modify knowledgebase question. [Auth]

Modify knowledgebase question. Requires JWT or Session Cookie and VATUSA Staff Role

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


$apiInstance = new VATUSA\Client\Api\SupportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$categoryid = 56; // int | ID of Knowledgebase Category
$questionid = 56; // int | ID of question
$question = "question_example"; // string | New question
$answer = "answer_example"; // string | New answer
$category = 56; // int | Move to new category
$order = 56; // int | New order placement

try {
    $result = $apiInstance->supportKbCategoryidQuestionidPut($categoryid, $questionid, $question, $answer, $category, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupportApi->supportKbCategoryidQuestionidPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **categoryid** | **int**| ID of Knowledgebase Category |
 **questionid** | **int**| ID of question |
 **question** | **string**| New question | [optional]
 **answer** | **string**| New answer | [optional]
 **category** | **int**| Move to new category | [optional]
 **order** | **int**| New order placement | [optional]

### Return type

[**\VATUSA\Client\Model\OK**](../Model/OK.md)

### Authorization

[jwt](../../README.md#jwt), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **supportKbGet**
> \VATUSA\Client\Model\KnowledgebaseCategories[] supportKbGet()

Get knowledgebase list.

Get knowledgebase list.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new VATUSA\Client\Api\SupportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->supportKbGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupportApi->supportKbGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\VATUSA\Client\Model\KnowledgebaseCategories[]**](../Model/KnowledgebaseCategories.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **supportKbIdDelete**
> \VATUSA\Client\Model\OK supportKbIdDelete($id)

Delete knowledgebase category. [Auth]

Delete knowledgebase category. Requires JWT or Session Cookie and VATUSA Staff role.

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


$apiInstance = new VATUSA\Client\Api\SupportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of Knowledgebase Category

try {
    $result = $apiInstance->supportKbIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupportApi->supportKbIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of Knowledgebase Category |

### Return type

[**\VATUSA\Client\Model\OK**](../Model/OK.md)

### Authorization

[jwt](../../README.md#jwt), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **supportKbIdPost**
> \VATUSA\Client\Model\OKID supportKbIdPost($id, $question, $answer)

Create knowledgebase question. [Auth]

Creates knowledgebase question. Requires JWT or Session Cookie and VATUSA Staff role.

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


$apiInstance = new VATUSA\Client\Api\SupportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of category
$question = "question_example"; // string | Question
$answer = "answer_example"; // string | Answer

try {
    $result = $apiInstance->supportKbIdPost($id, $question, $answer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupportApi->supportKbIdPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of category |
 **question** | **string**| Question | [optional]
 **answer** | **string**| Answer | [optional]

### Return type

[**\VATUSA\Client\Model\OKID**](../Model/OKID.md)

### Authorization

[jwt](../../README.md#jwt), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **supportKbIdPut**
> \VATUSA\Client\Model\OK supportKbIdPut($id, $name)

Modify knowledgebase category. [Auth]

Modify knowledgebase category. Requires JWT or Session Cookie and VATUSA Staff role.

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


$apiInstance = new VATUSA\Client\Api\SupportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of Knowledgebase Category
$name = "name_example"; // string | New name of category

try {
    $result = $apiInstance->supportKbIdPut($id, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupportApi->supportKbIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of Knowledgebase Category |
 **name** | **string**| New name of category | [optional]

### Return type

[**\VATUSA\Client\Model\OK**](../Model/OK.md)

### Authorization

[jwt](../../README.md#jwt), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **supportKbPost**
> \VATUSA\Client\Model\OKID supportKbPost($name)

Create knowledgebase category. [Auth]

Creates knowledgebase category. Requires JWT or Session Cookie and VATUSA Staff role.

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


$apiInstance = new VATUSA\Client\Api\SupportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = "name_example"; // string | Name of new category

try {
    $result = $apiInstance->supportKbPost($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupportApi->supportKbPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of new category | [optional]

### Return type

[**\VATUSA\Client\Model\OKID**](../Model/OKID.md)

### Authorization

[jwt](../../README.md#jwt), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **supportTicketsDeptsDeptStaffGet**
> \VATUSA\Client\Model\InlineResponse20017 supportTicketsDeptsDeptStaffGet($dept)

Get list of assignable staff members for department.

Get list of assignable staff members for {dept}.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new VATUSA\Client\Api\SupportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$dept = "dept_example"; // string | ID for Dept

try {
    $result = $apiInstance->supportTicketsDeptsDeptStaffGet($dept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupportApi->supportTicketsDeptsDeptStaffGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dept** | **string**| ID for Dept |

### Return type

[**\VATUSA\Client\Model\InlineResponse20017**](../Model/InlineResponse20017.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **supportTicketsDeptsGet**
> \VATUSA\Client\Model\InlineResponse20016 supportTicketsDeptsGet()

Get list of assignable departments.

Get list of assignable departments.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new VATUSA\Client\Api\SupportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->supportTicketsDeptsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupportApi->supportTicketsDeptsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\VATUSA\Client\Model\InlineResponse20016**](../Model/InlineResponse20016.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

