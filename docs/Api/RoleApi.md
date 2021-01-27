# VATUSA\Client\RoleApi

All URIs are relative to *https://api.vatusa.net/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**userCidRolesFacilityRoleDelete**](RoleApi.md#userCidRolesFacilityRoleDelete) | **DELETE** /user/{cid}/roles/{facility}/{role} | Delete role. [Auth]
[**userCidRolesFacilityRolePost**](RoleApi.md#userCidRolesFacilityRolePost) | **POST** /user/{cid}/roles/{facility}/{role} | Assign new role. [Auth]
[**userRolesFacilityRoleGet**](RoleApi.md#userRolesFacilityRoleGet) | **GET** /user/roles/{facility}/{role} | Get users assigned to specific staff role.


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


$apiInstance = new VATUSA\Client\Api\RoleApi(
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
    echo 'Exception when calling RoleApi->userCidRolesFacilityRoleDelete: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new VATUSA\Client\Api\RoleApi(
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
    echo 'Exception when calling RoleApi->userCidRolesFacilityRolePost: ', $e->getMessage(), PHP_EOL;
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

# **userRolesFacilityRoleGet**
> \VATUSA\Client\Model\InlineResponse20022[] userRolesFacilityRoleGet($facility, $role)

Get users assigned to specific staff role.

Get users assigned to specific staff role

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new VATUSA\Client\Api\RoleApi(
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
    echo 'Exception when calling RoleApi->userRolesFacilityRoleGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **facility** | **string**| Facility IATA ID |
 **role** | **string**| Role |

### Return type

[**\VATUSA\Client\Model\InlineResponse20022[]**](../Model/InlineResponse20022.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

