# TrainingRecord

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Record ID | 
**studentId** | **int** | Student CID | 
**instructorId** | **int** | Instructor CID | 
**sessionDate** | **string** | Date and time of session | 
**facilityId** | **string** | Facility ID (ex. ZSE) | [optional] 
**position** | **string** | Position worked/trained on (ex. SEA_APP) | 
**duration** | **string** | Duration of session, HH:MM | 
**movements** | **int** | Number of aircraft seen | [optional] 
**score** | **int** | Overall score/rating out of 5 | [optional] 
**notes** | **string** | Training notes content | 
**location** | **int** | 0 &#x3D; Classroom; 1 &#x3D; Live; 2 &#x3D; Sweatbox | 
**otsStatus** | **bool** | OTS Status: 0 &#x3D; Not OTS, 1 &#x3D; OTS Pass, 2 &#x3D; OTS Fail, 3 &#x3D; OTS Recommended | [optional] 
**isCbt** | **bool** | System - CBT Completion | [optional] 
**soloGranted** | **bool** | Solo was granted during the session | [optional] 
**modifiedBy** | **bool** | Editor CID | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


