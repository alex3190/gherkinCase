<?php
namespace Repository;

use Model\TestSuite;


class TestSuiteRepository
{
    public static $conn;
    public static $instance;

    private function __construct() {
        include_once '../app/Model/TestSuite.php';

        self::$conn = new \mysqli('localhost', 'root', 'gr33nsky', 'GherkinCase');
        if(self::$conn->connect_error) {
            throw new \Exception('Failed to connect to MySql: '. self::$conn->connect_error);
        }
    }

    public static function getInstance() {
        if(self::$instance == NULL) {
            self::$instance = new TestSuiteRepository();
        }

        return self::$instance;
    }

    /**
     * @return array
     *
     * Gets all the suites in the database
     */
    public function getAllTestSuites(){
        $queryResult = self::$conn->query("SELECT * FROM test_suites")->fetch_all(MYSQLI_ASSOC);
        $allTestSuites = [];

        for($i = 0; $i < count($queryResult); $i++) {
            $allTestSuites[] = new TestSuite($queryResult[$i]["name"], $queryResult[$i]["id"]);
        };

        return $allTestSuites;
    }

    /**
     * @param $nameOfSuite
     * @return mixed
     *
     * Gets a test suite ID by name
     */
    public function getTestSuiteByName($nameOfSuite) {
        $queryResult = self::$conn->query("SELECT * FROM test_suites WHERE `name`='$nameOfSuite'")->fetch_all(MYSQLI_ASSOC);
        return new TestSuite($nameOfSuite, $queryResult[0]["id"]);
    }


    /**
     * @param TestSuite $suite
     * @return mixed
     *
     * Writes a new TestSuite in the database
     */
    public function saveTestSuite(TestSuite $suite) {
        $name = $suite->getName();
        $query = "INSERT INTO test_suites(`name`) VALUES ('$name')";

        if(self::$conn->query($query)) {
            return self::$conn->insert_id;
        }
    }
}