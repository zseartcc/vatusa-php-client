# VATUSA\Client\StatsApi

All URIs are relative to *https://api.vatusa.net/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**statsExamsFacilityGet**](StatsApi.md#statsExamsFacilityGet) | **GET** /stats/exams/{facility} | Get statistics of exam results. [Key]


# **statsExamsFacilityGet**
> \VATUSA\Client\Model\InlineResponse20014[] statsExamsFacilityGet($facility, $month, $year)

Get statistics of exam results. [Key]

Get statistics of exam results. Requires API Key or facility staff authentication.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new VATUSA\Client\Api\StatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$facility = "facility_example"; // string | Filter for facility IATA ID
$month = 56; // int | Filter by month number, requires year
$year = 56; // int | 4 digit year to limit results by

try {
    $result = $apiInstance->statsExamsFacilityGet($facility, $month, $year);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatsApi->statsExamsFacilityGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **facility** | **string**| Filter for facility IATA ID |
 **month** | **int**| Filter by month number, requires year | [optional]
 **year** | **int**| 4 digit year to limit results by | [optional]

### Return type

[**\VATUSA\Client\Model\InlineResponse20014[]**](../Model/InlineResponse20014.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

