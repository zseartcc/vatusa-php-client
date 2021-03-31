# VATUSA\Client\ExamApi

All URIs are relative to *https://api.vatusa.net/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**examIdAssignCidDelete**](ExamApi.md#examIdAssignCidDelete) | **DELETE** /exam/{id}/assign/{cid} | Delete exam assignment. [Auth]
[**examIdAssignCidPost**](ExamApi.md#examIdAssignCidPost) | **POST** /exam/{id}/assign/{cid} | Assign exam. [Auth]
[**examQueueExamIdPost**](ExamApi.md#examQueueExamIdPost) | **POST** /exam/queue/{examId} | Add exam to queue for the VATUSA Exam Center. [Private]
[**examRequestGet**](ExamApi.md#examRequestGet) | **GET** /exam/request | Generates and sends exam payload for VATUSA Exam Center based on queued exam for JWT auth&#39;d user.     [Private]
[**examSubmitPost**](ExamApi.md#examSubmitPost) | **POST** /exam/submit | Submit exam payload for grading. [Private]
[**examsExamidGet**](ExamApi.md#examsExamidGet) | **GET** /exams/{examid} | Get exam details
[**examsExamidPost**](ExamApi.md#examsExamidPost) | **POST** /exams/{examid} | Create new question. [Private]
[**examsExamidPut**](ExamApi.md#examsExamidPut) | **PUT** /exams/{examid} | Edit details of exam. [Private]
[**examsExamidQuestionIDPut**](ExamApi.md#examsExamidQuestionIDPut) | **PUT** /exams/{examid}/{questionID} | Edit question. [Private]
[**examsExamidQuestionsGet**](ExamApi.md#examsExamidQuestionsGet) | **GET** /exams/{examid}/questions | Generate list of questions. [Auth]
[**examsFacilityGet**](ExamApi.md#examsFacilityGet) | **GET** /exams/{facility} | Get list of exams
[**userCidExamHistoryGet**](ExamApi.md#userCidExamHistoryGet) | **GET** /user/{cid}/exam/history | Get user&#39;s exam history. [Key]


# **examIdAssignCidDelete**
> \VATUSA\Client\Model\OK examIdAssignCidDelete($id, $cid)

Delete exam assignment. [Auth]

Delete user's exam assignment. Requires JWT or Session Cookie.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new VATUSA\Client\Api\ExamApi(
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
    echo 'Exception when calling ExamApi->examIdAssignCidDelete: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new VATUSA\Client\Api\ExamApi(
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
    echo 'Exception when calling ExamApi->examIdAssignCidPost: ', $e->getMessage(), PHP_EOL;
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

# **examQueueExamIdPost**
> \VATUSA\Client\Model\OK examQueueExamIdPost($examId, $bearer)

Add exam to queue for the VATUSA Exam Center. [Private]

Sets the exam as the queued exam for VEC. CORS Restricted.

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


$apiInstance = new VATUSA\Client\Api\ExamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$examId = 789; // int | Exam ID to place in queue
$bearer = "bearer_example"; // string | JWT Token

try {
    $result = $apiInstance->examQueueExamIdPost($examId, $bearer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExamApi->examQueueExamIdPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **examId** | **int**| Exam ID to place in queue |
 **bearer** | **string**| JWT Token |

### Return type

[**\VATUSA\Client\Model\OK**](../Model/OK.md)

### Authorization

[jwt](../../README.md#jwt), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **examRequestGet**
> \VATUSA\Client\Model\InlineResponse2007 examRequestGet($bearer)

Generates and sends exam payload for VATUSA Exam Center based on queued exam for JWT auth'd user.     [Private]

Generates and sends exam payload for VATUSA Exam Center based on queued exam for     JWT auth'd user. CORS Restricted

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: jwt
$config = VATUSA\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new VATUSA\Client\Api\ExamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bearer = "bearer_example"; // string | JWT Token

try {
    $result = $apiInstance->examRequestGet($bearer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExamApi->examRequestGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bearer** | **string**| JWT Token |

### Return type

[**\VATUSA\Client\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **examSubmitPost**
> \VATUSA\Client\Model\InlineResponse2006 examSubmitPost($payload, $answers, $bearer)

Submit exam payload for grading. [Private]

Submit exam from VEC for grading. CORS Restricted

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: jwt
$config = VATUSA\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new VATUSA\Client\Api\ExamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = "payload_example"; // string | Exam payload (base64)
$answers = "answers_example"; // string | Answers (base64)
$bearer = "bearer_example"; // string | JWT Token

try {
    $result = $apiInstance->examSubmitPost($payload, $answers, $bearer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExamApi->examSubmitPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | **string**| Exam payload (base64) |
 **answers** | **string**| Answers (base64) |
 **bearer** | **string**| JWT Token |

### Return type

[**\VATUSA\Client\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **examsExamidGet**
> \VATUSA\Client\Model\Exam examsExamidGet($examid)

Get exam details

Get exam details by ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new VATUSA\Client\Api\ExamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$examid = "examid_example"; // string | Get exam details of      *                                   id

try {
    $result = $apiInstance->examsExamidGet($examid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExamApi->examsExamidGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **examid** | **string**| Get exam details of      *                                   id |

### Return type

[**\VATUSA\Client\Model\Exam**](../Model/Exam.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **examsExamidPost**
> \VATUSA\Client\Model\OKID examsExamidPost($facility, $examid, $question, $type, $choice1, $choice2, $choice3, $choice4)

Create new question. [Private]

Create new question. CORS Restricted.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new VATUSA\Client\Api\ExamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$facility = "facility_example"; // string | Filter list by     Facility IATA ID
$examid = 56; // int | Exam ID
$question = "question_example"; // string | Question text
$type = "type_example"; // string | Type of question     (multiple|truefalse)
$choice1 = "choice1_example"; // string | Answer
$choice2 = "choice2_example"; // string | Distractor #1 (only for     type=multiple)
$choice3 = "choice3_example"; // string | Distractor #2 (only for     type=multiple)
$choice4 = "choice4_example"; // string | Distractor #3 (only for     type=multiple)

try {
    $result = $apiInstance->examsExamidPost($facility, $examid, $question, $type, $choice1, $choice2, $choice3, $choice4);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExamApi->examsExamidPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **facility** | **string**| Filter list by     Facility IATA ID |
 **examid** | **int**| Exam ID |
 **question** | **string**| Question text |
 **type** | **string**| Type of question     (multiple|truefalse) |
 **choice1** | **string**| Answer |
 **choice2** | **string**| Distractor #1 (only for     type&#x3D;multiple) | [optional]
 **choice3** | **string**| Distractor #2 (only for     type&#x3D;multiple) | [optional]
 **choice4** | **string**| Distractor #3 (only for     type&#x3D;multiple) | [optional]

### Return type

[**\VATUSA\Client\Model\OKID**](../Model/OKID.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **examsExamidPut**
> \VATUSA\Client\Model\OK examsExamidPut($facility, $examid, $name, $cbtRequired, $passingScore, $retakePeriod, $numberQuestions, $active)

Edit details of exam. [Private]

Edit details of exam. CORS Restricted

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new VATUSA\Client\Api\ExamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$facility = "facility_example"; // string | Filter list by     Facility IATA ID
$examid = 56; // int | Exam ID
$name = "name_example"; // string | Exam name
$cbtRequired = 56; // int | ID of CBT Required
$passingScore = 56; // int | Passing Score Percentage *     100
$retakePeriod = 56; // int | Auto reassign on fail after     X days, 0 = no auto reassign, valid values: 1, 3, 5, 7, 14
$numberQuestions = 56; // int | Number of questions to     ask, 0 = all
$active = 56; // int | Is exam active? (numeric     representation of bool 1 = active, 0 = not active)

try {
    $result = $apiInstance->examsExamidPut($facility, $examid, $name, $cbtRequired, $passingScore, $retakePeriod, $numberQuestions, $active);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExamApi->examsExamidPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **facility** | **string**| Filter list by     Facility IATA ID |
 **examid** | **int**| Exam ID |
 **name** | **string**| Exam name | [optional]
 **cbtRequired** | **int**| ID of CBT Required | [optional]
 **passingScore** | **int**| Passing Score Percentage *     100 | [optional]
 **retakePeriod** | **int**| Auto reassign on fail after     X days, 0 &#x3D; no auto reassign, valid values: 1, 3, 5, 7, 14 | [optional]
 **numberQuestions** | **int**| Number of questions to     ask, 0 &#x3D; all | [optional]
 **active** | **int**| Is exam active? (numeric     representation of bool 1 &#x3D; active, 0 &#x3D; not active) | [optional]

### Return type

[**\VATUSA\Client\Model\OK**](../Model/OK.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **examsExamidQuestionIDPut**
> \VATUSA\Client\Model\OK examsExamidQuestionIDPut($facility, $examid, $questionID, $question, $type, $choice1, $choice2, $choice3, $choice4)

Edit question. [Private]

Edit question. CORS Restricted.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new VATUSA\Client\Api\ExamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$facility = "facility_example"; // string | Filter list by      *                                     Facility IATA ID
$examid = 56; // int | Exam ID
$questionID = 56; // int | Question ID
$question = "question_example"; // string | Question text
$type = "type_example"; // string | Type of question     (multiple|truefalse)
$choice1 = "choice1_example"; // string | Answer
$choice2 = "choice2_example"; // string | Distractor #1 (only for     type=multiple)
$choice3 = "choice3_example"; // string | Distractor #2 (only for     type=multiple)
$choice4 = "choice4_example"; // string | Distractor #3 (only for     type=multiple)

try {
    $result = $apiInstance->examsExamidQuestionIDPut($facility, $examid, $questionID, $question, $type, $choice1, $choice2, $choice3, $choice4);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExamApi->examsExamidQuestionIDPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **facility** | **string**| Filter list by      *                                     Facility IATA ID |
 **examid** | **int**| Exam ID |
 **questionID** | **int**| Question ID |
 **question** | **string**| Question text |
 **type** | **string**| Type of question     (multiple|truefalse) |
 **choice1** | **string**| Answer |
 **choice2** | **string**| Distractor #1 (only for     type&#x3D;multiple) | [optional]
 **choice3** | **string**| Distractor #2 (only for     type&#x3D;multiple) | [optional]
 **choice4** | **string**| Distractor #3 (only for     type&#x3D;multiple) | [optional]

### Return type

[**\VATUSA\Client\Model\OK**](../Model/OK.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **examsExamidQuestionsGet**
> \VATUSA\Client\Model\Exam examsExamidQuestionsGet($examid)

Generate list of questions. [Auth]

Generates list of questions. Session cookie or JWT required.

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


$apiInstance = new VATUSA\Client\Api\ExamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$examid = "examid_example"; // string | exam id

try {
    $result = $apiInstance->examsExamidQuestionsGet($examid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExamApi->examsExamidQuestionsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **examid** | **string**| exam id |

### Return type

[**\VATUSA\Client\Model\Exam**](../Model/Exam.md)

### Authorization

[jwt](../../README.md#jwt), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **examsFacilityGet**
> \VATUSA\Client\Model\Exam[] examsFacilityGet($facility)

Get list of exams

Generates list of exams.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new VATUSA\Client\Api\ExamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$facility = "facility_example"; // string | (OPTIONAL) Filter list by Facility     IATA ID

try {
    $result = $apiInstance->examsFacilityGet($facility);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExamApi->examsFacilityGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **facility** | **string**| (OPTIONAL) Filter list by Facility     IATA ID |

### Return type

[**\VATUSA\Client\Model\Exam[]**](../Model/Exam.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userCidExamHistoryGet**
> \VATUSA\Client\Model\InlineResponse20027 userCidExamHistoryGet($cid)

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


$apiInstance = new VATUSA\Client\Api\ExamApi(
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
    echo 'Exception when calling ExamApi->userCidExamHistoryGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cid** | **int**| CERT ID |

### Return type

[**\VATUSA\Client\Model\InlineResponse20027**](../Model/InlineResponse20027.md)

### Authorization

[apikey](../../README.md#apikey), [jwt](../../README.md#jwt), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

