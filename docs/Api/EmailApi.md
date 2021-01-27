# VATUSA\Client\EmailApi

All URIs are relative to *https://api.vatusa.net/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**emailAddressGet**](EmailApi.md#emailAddressGet) | **GET** /email/{address} | Get info of VATUSA email address. [Private]
[**emailGet**](EmailApi.md#emailGet) | **GET** /email | Get info of VATUSA email address assigned for user. [Private]
[**emailHostedFacilityUsernameDelete**](EmailApi.md#emailHostedFacilityUsernameDelete) | **DELETE** /email/hosted/{facility}/{username} | Delete VATUSA hosted email account. [Private]
[**emailHostedFacilityUsernamePut**](EmailApi.md#emailHostedFacilityUsernamePut) | **PUT** /email/hosted/{facility}/{username} | Modify VATUSA hosted email account. [Private]
[**emailHostedGet**](EmailApi.md#emailHostedGet) | **GET** /email/hosted | Get VATUSA hosted email accounts.  [Private]
[**emailPut**](EmailApi.md#emailPut) | **PUT** /email | Modify email account. [Private]
[**facilityIdEmailTemplateNameGet**](EmailApi.md#facilityIdEmailTemplateNameGet) | **GET** /facility/{id}/email/{templateName} | Get facility&#39;s email template. [Key]
[**facilityIdEmailTemplateNamePost**](EmailApi.md#facilityIdEmailTemplateNamePost) | **POST** /facility/{id}/email/{templateName} | Modify facility&#39;s email template. [Auth]


# **emailAddressGet**
> \VATUSA\Client\Model\InlineResponse2004[] emailAddressGet($bearer, $address)

Get info of VATUSA email address. [Private]

Get info of VATUSA email address. CORS Restricted.

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


$apiInstance = new VATUSA\Client\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bearer = "bearer_example"; // string | JWT Token
$address = "address_example"; // string | Email address

try {
    $result = $apiInstance->emailAddressGet($bearer, $address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->emailAddressGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bearer** | **string**| JWT Token |
 **address** | **string**| Email address |

### Return type

[**\VATUSA\Client\Model\InlineResponse2004[]**](../Model/InlineResponse2004.md)

### Authorization

[jwt](../../README.md#jwt), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **emailGet**
> \VATUSA\Client\Model\InlineResponse2003[] emailGet($bearer)

Get info of VATUSA email address assigned for user. [Private]

Get info of VATUSA email address assigned for user. CORS Restricted.

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


$apiInstance = new VATUSA\Client\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bearer = "bearer_example"; // string | JWT Token

try {
    $result = $apiInstance->emailGet($bearer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->emailGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bearer** | **string**| JWT Token |

### Return type

[**\VATUSA\Client\Model\InlineResponse2003[]**](../Model/InlineResponse2003.md)

### Authorization

[jwt](../../README.md#jwt), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **emailHostedFacilityUsernameDelete**
> \VATUSA\Client\Model\OK emailHostedFacilityUsernameDelete($bearer, $username, $facility)

Delete VATUSA hosted email account. [Private]

Delete VATUSA hosted email account. CORS Restricted.

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


$apiInstance = new VATUSA\Client\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bearer = "bearer_example"; // string | JWT Token
$username = "username_example"; // string | Email username
$facility = "facility_example"; // string | Facility IATA ID

try {
    $result = $apiInstance->emailHostedFacilityUsernameDelete($bearer, $username, $facility);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->emailHostedFacilityUsernameDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bearer** | **string**| JWT Token |
 **username** | **string**| Email username |
 **facility** | **string**| Facility IATA ID |

### Return type

[**\VATUSA\Client\Model\OK**](../Model/OK.md)

### Authorization

[jwt](../../README.md#jwt), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **emailHostedFacilityUsernamePut**
> \VATUSA\Client\Model\OK emailHostedFacilityUsernamePut($bearer, $username, $facility, $cid)

Modify VATUSA hosted email account. [Private]

Modify VATUSA hosted email account. CORS Restricted.

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


$apiInstance = new VATUSA\Client\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bearer = "bearer_example"; // string | JWT Token
$username = "username_example"; // string | Email username
$facility = "facility_example"; // string | Facility IATA ID
$cid = 56; // int | Owning CID

try {
    $result = $apiInstance->emailHostedFacilityUsernamePut($bearer, $username, $facility, $cid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->emailHostedFacilityUsernamePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bearer** | **string**| JWT Token |
 **username** | **string**| Email username |
 **facility** | **string**| Facility IATA ID |
 **cid** | **int**| Owning CID | [optional]

### Return type

[**\VATUSA\Client\Model\OK**](../Model/OK.md)

### Authorization

[jwt](../../README.md#jwt), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **emailHostedGet**
> \VATUSA\Client\Model\InlineResponse2005 emailHostedGet($bearer, $facility)

Get VATUSA hosted email accounts.  [Private]

Get VATUSA hosted email accounts. CORS Restricted.

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


$apiInstance = new VATUSA\Client\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bearer = "bearer_example"; // string | JWT Token
$facility = "facility_example"; // string | Facility IATA ID

try {
    $result = $apiInstance->emailHostedGet($bearer, $facility);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->emailHostedGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bearer** | **string**| JWT Token |
 **facility** | **string**| Facility IATA ID | [optional]

### Return type

[**\VATUSA\Client\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

[jwt](../../README.md#jwt), [session](../../README.md#session)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **emailPut**
> \VATUSA\Client\Model\OK emailPut($bearer, $email, $destination, $password, $static)

Modify email account. [Private]

Modify email account. Static forwards may only be modified by the ATM, DATM or WM. CORS      *     Restricted.

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


$apiInstance = new VATUSA\Client\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bearer = "bearer_example"; // string | JWT Token
$email = "email_example"; // string | Email Address
$destination = "destination_example"; // string | Set destination for forwarded address
$password = "password_example"; // string | Password for full account
$static = true; // bool | Is static forward or not

try {
    $result = $apiInstance->emailPut($bearer, $email, $destination, $password, $static);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->emailPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bearer** | **string**| JWT Token |
 **email** | **string**| Email Address |
 **destination** | **string**| Set destination for forwarded address | [optional]
 **password** | **string**| Password for full account | [optional]
 **static** | **bool**| Is static forward or not | [optional]

### Return type

[**\VATUSA\Client\Model\OK**](../Model/OK.md)

### Authorization

[jwt](../../README.md#jwt), [session](../../README.md#session)

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

$apiInstance = new VATUSA\Client\Api\EmailApi(
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
    echo 'Exception when calling EmailApi->facilityIdEmailTemplateNameGet: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new VATUSA\Client\Api\EmailApi(
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
    echo 'Exception when calling EmailApi->facilityIdEmailTemplateNamePost: ', $e->getMessage(), PHP_EOL;
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

