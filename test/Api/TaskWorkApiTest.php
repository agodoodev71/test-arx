<?php
/**
 * TaskWorkApiTest
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Abletech.Arxivar.Server.WebApi.Services
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the endpoint.
 */

namespace Swagger\Client;

use \Swagger\Client\Configuration;
use \Swagger\Client\ApiException;
use \Swagger\Client\ObjectSerializer;

/**
 * TaskWorkApiTest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TaskWorkApiTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test cases
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
     * Test case for taskWorkActivateTaskwork
     *
     * This call returns a taskwork if active.
     *
     */
    public function testTaskWorkActivateTaskwork()
    {
    }

    /**
     * Test case for taskWorkAutoAssign
     *
     * This call autoassigns the taskwork.
     *
     */
    public function testTaskWorkAutoAssign()
    {
    }

    /**
     * Test case for taskWorkCanFinalizeTaskByIds
     *
     * This call returns if is possible to close task work list.
     *
     */
    public function testTaskWorkCanFinalizeTaskByIds()
    {
    }

    /**
     * Test case for taskWorkCanFinalizeTaskByIdsAndExitCodeAndPassword
     *
     * This call returns if is possible to close task work list by exit code and password.
     *
     */
    public function testTaskWorkCanFinalizeTaskByIdsAndExitCodeAndPassword()
    {
    }

    /**
     * Test case for taskWorkDeleteTaskWorkById
     *
     * This call deletes the task.
     *
     */
    public function testTaskWorkDeleteTaskWorkById()
    {
    }

    /**
     * Test case for taskWorkFinalizeTaskByIdsAndExitCodeAndPassword
     *
     * This call closes a task work list.
     *
     */
    public function testTaskWorkFinalizeTaskByIdsAndExitCodeAndPassword()
    {
    }

    /**
     * Test case for taskWorkGetActiveTaskWork
     *
     * This call executes a task search and return taskwork active for the user on a specific document.
     *
     */
    public function testTaskWorkGetActiveTaskWork()
    {
    }

    /**
     * Test case for taskWorkGetDefaultSelect
     *
     * This call provides default select for tasklist search.
     *
     */
    public function testTaskWorkGetDefaultSelect()
    {
    }

    /**
     * Test case for taskWorkGetDocumentsByProcessId
     *
     * This call returns the task documents.
     *
     */
    public function testTaskWorkGetDocumentsByProcessId()
    {
    }

    /**
     * Test case for taskWorkGetDocumentsFilenameByProcessId
     *
     * .
     *
     */
    public function testTaskWorkGetDocumentsFilenameByProcessId()
    {
    }

    /**
     * Test case for taskWorkGetExitCodesByTaskWorkIds
     *
     * This call returns all possible exit code for taskWorks list.
     *
     */
    public function testTaskWorkGetExitCodesByTaskWorkIds()
    {
    }

    /**
     * Test case for taskWorkGetProfileSchemaForTaskWorkMaskDocumentOperation
     *
     * This call returns a document schema for a mask insert document taskWork operation.
     *
     */
    public function testTaskWorkGetProfileSchemaForTaskWorkMaskDocumentOperation()
    {
    }

    /**
     * Test case for taskWorkGetProfileSchemaForTaskWorkModelDocumentOperation
     *
     * This call returns a profile schema for a model insert document taskWork operation.
     *
     */
    public function testTaskWorkGetProfileSchemaForTaskWorkModelDocumentOperation()
    {
    }

    /**
     * Test case for taskWorkGetProfileSchemaForTaskWorkStandardDocumentOperation
     *
     * This call returns a profile schema for a standard insert document taskWork operation.
     *
     */
    public function testTaskWorkGetProfileSchemaForTaskWorkStandardDocumentOperation()
    {
    }

    /**
     * Test case for taskWorkGetTaskWorkById
     *
     * This call returns the task.
     *
     */
    public function testTaskWorkGetTaskWorkById()
    {
    }

    /**
     * Test case for taskWorkGetTaskWorkForAutoAssign
     *
     * This call returns all autoassigned taskwork associated with a document.
     *
     */
    public function testTaskWorkGetTaskWorkForAutoAssign()
    {
    }

    /**
     * Test case for taskWorkGetTasks
     *
     * This call executes a task search and return taskwork active for the user and the given workflows ids (with all revisions).
     *
     */
    public function testTaskWorkGetTasks()
    {
    }

    /**
     * Test case for taskWorkReassignTaskById
     *
     * This call reassigns a task to selected users.
     *
     */
    public function testTaskWorkReassignTaskById()
    {
    }

    /**
     * Test case for taskWorkReassignUsersTaskById
     *
     * This call reassigns a task to selected users.
     *
     */
    public function testTaskWorkReassignUsersTaskById()
    {
    }

    /**
     * Test case for taskWorkSetProfileForTaskWorkBySelectionDocumentOperation
     *
     * This call adds a profile to process for a selection document taskwork operation.
     *
     */
    public function testTaskWorkSetProfileForTaskWorkBySelectionDocumentOperation()
    {
    }

    /**
     * Test case for taskWorkSetProfileForTaskWorkMaskDocumentOperation
     *
     * This call profiles a new document for a mask insert document taskwork operation.
     *
     */
    public function testTaskWorkSetProfileForTaskWorkMaskDocumentOperation()
    {
    }

    /**
     * Test case for taskWorkSetProfileForTaskWorkModelDocumentOperation
     *
     * This call profiles a new document for a model insert document taskwork operation.
     *
     */
    public function testTaskWorkSetProfileForTaskWorkModelDocumentOperation()
    {
    }

    /**
     * Test case for taskWorkSetProfileForTaskWorkStandardDocumentOperation
     *
     * This call profiles a new document for a standard insert document taskwork operation.
     *
     */
    public function testTaskWorkSetProfileForTaskWorkStandardDocumentOperation()
    {
    }

    /**
     * Test case for taskWorkSetTaskPriority
     *
     * This call sets the tasks priority.
     *
     */
    public function testTaskWorkSetTaskPriority()
    {
    }

    /**
     * Test case for taskWorkSetTaskRead
     *
     * This call sets the task as read.
     *
     */
    public function testTaskWorkSetTaskRead()
    {
    }

    /**
     * Test case for taskWorkSetTaskUnRead
     *
     * This call sets the tasks as unread.
     *
     */
    public function testTaskWorkSetTaskUnRead()
    {
    }

    /**
     * Test case for taskWorkTaskWorkTakeCharge
     *
     * This call takes charge of a taskwork.
     *
     */
    public function testTaskWorkTaskWorkTakeCharge()
    {
    }
}
