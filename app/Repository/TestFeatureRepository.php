<?php
/**
 * Created by PhpStorm.
 * User: Alexandru
 * Date: 5/4/2017
 * Time: 11:49 PM
 */

namespace Repository;


use Model\TestFeature;
use Model\TestSuite;

class TestFeatureRepository
{
    public static $conn;
    public static $instance;

    private function __construct() {
        include_once '../app/Model/TestFeature.php';
        include_once 'TestSuiteRepository.php';

        self::$conn = new \mysqli('localhost', 'root', 'gr33nsky', 'GherkinCase');
        if(self::$conn->connect_error) {
            throw new \Exception('Failed to connect to MySql: '. self::$conn->connect_error);
        }
    }

    public static function getInstance() {
        if(self::$instance == NULL) {
            self::$instance = new TestFeatureRepository();
        }

        return self::$instance;
    }

    public function saveTestFeatureToSuite(TestFeature $feature) {
        $name = $feature->getName();
        $suiteId = $feature->getSuiteId();
        $query = "INSERT INTO features(`name`, `suite_id`) VALUES ('$name', '$suiteId')";

        if(self::$conn->query($query)) {
            return self::$conn->insert_id;
        }
    }

    public function getAllFeaturesInSuite(TestSuite $suite) {

        $findSuite = TestSuiteRepository::getInstance()->getTestSuiteByName($suite->getName());
        $suiteId = $findSuite->getId();
        $allTestFeatures=[];
        $queryResult = self::$conn->query("SELECT * FROM features WHERE `suite_id` = '$suiteId'")->fetch_all(MYSQLI_ASSOC);
        for($i = 0; $i < count($queryResult); $i++) {
            $allTestFeatures[] = new TestFeature($queryResult[$i]["name"], $queryResult[$i]["suite_id"], $queryResult[$i]["id"]);
        };

        return $allTestFeatures;
    }
}