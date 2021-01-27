# User

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cid** | **int** | Class User | [optional] 
**fname** | **string** | First name | [optional] 
**lname** | **string** | Last name | [optional] 
**email** | **string** | Email address of user, will be null if API Key or  *                                     necessary roles are not available (ATM, DATM, TA, WM, INS) | [optional] 
**facility** | **string** | Facility ID | [optional] 
**rating** | **int** | Rating based off array where 1&#x3D;OBS, S1, S2, S3,  *                                      C1, C2, C3, I1, I2, I3, SUP, ADM | [optional] 
**ratingShort** | **string** | String representation of rating | [optional] 
**createdAt** | **string** | Date added to database | [optional] 
**updatedAt** | **string** | Class User | [optional] 
**flagNeedbasic** | **bool** | 1 needs basic exam | [optional] 
**flagXferOverride** | **bool** | Has approved transfer override | [optional] 
**flagBroadcastOptedIn** | **bool** | Has opted in to receiving broadcast  *                                                     emails | [optional] 
**flagPreventStaffAssign** | **bool** | Ineligible for staff role  *                                                       assignment | [optional] 
**facilityJoin** | **string** | Date joined facility (YYYY-mm-dd  *                                             hh:mm:ss) | [optional] 
**promotionEligible** | **bool** | Is member eligible for promotion? | [optional] 
**transferEligible** | **bool** | Is member is eligible for transfer? | [optional] 
**flagHomecontroller** | **bool** | 1-Belongs to VATUSA | [optional] 
**lastactivity** | **string** | Date last seen on website | [optional] 
**isMentor** | **bool** | Has Mentor role | [optional] 
**isSupIns** | **bool** | Is a SUP and has INS role | [optional] 
**roles** | [**\VATUSA\Client\Model\UserRoles[]**](UserRoles.md) | Class User | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


