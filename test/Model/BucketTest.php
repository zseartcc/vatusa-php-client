<?php
/**
 * BucketTest
 *
 * PHP version 5
 *
 * @category Class
 * @package  VATUSA\PHPClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * VATUSA API
 *
 * VATUSA APIv2 Documentation.             Authentication methods are: <ul>             <li> JSON Web Tokens (Translated from Laravel session)</li>             <li> Session Cookies (Client-side credentials with ULS)</li>             <li> API Keys (Issued to facilities)</li></ul>             <p>Method security, if applicable, is indicated in brackets at the end of each endpoint title.</p>             <p>Security classification: <ul>                 <li><strong>Private:</strong> CORS Restricted (Internal)</li>                 <li><strong>Auth:</strong> Accepts Session Cookie or JWT</li>                 <li><strong>Key:</strong> Accepts API Key, Session Cookie, or JWT</li>             </ul></p>             <p>Facilities that have a APIv2 JWK defined in facility settings will have the data encapsulated in a             signed package.  For more information, please see the IT section of the VATUSA forums.</p>             <p>To prevent database changes in a development environment, you can either use your API sandbox key              or pass the <strong>?test</strong> query parameter with the call. Whether or not <strong>?test</strong> is present,              if both Sandbox JWK and Dev URL are configured, and the domains match, the response will be formatted according to JSON Web Signature, RFC 7515. </p>
 *
 * OpenAPI spec version: 2.3
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.16
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the model.
 */

namespace VATUSA\PHPClient;

/**
 * BucketTest Class Doc Comment
 *
 * @category    Class
 * @description Bucket
 * @package     VATUSA\PHPClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class BucketTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test "Bucket"
     */
    public function testBucket()
    {
    }

    /**
     * Test attribute "id"
     */
    public function testPropertyId()
    {
    }

    /**
     * Test attribute "facility"
     */
    public function testPropertyFacility()
    {
    }

    /**
     * Test attribute "name"
     */
    public function testPropertyName()
    {
    }

    /**
     * Test attribute "arn"
     */
    public function testPropertyArn()
    {
    }

    /**
     * Test attribute "accessKey"
     */
    public function testPropertyAccessKey()
    {
    }

    /**
     * Test attribute "createdAt"
     */
    public function testPropertyCreatedAt()
    {
    }

    /**
     * Test attribute "updatedAt"
     */
    public function testPropertyUpdatedAt()
    {
    }
}
