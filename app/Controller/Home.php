<?php
namespace Controller;

use Model\TestFeature;
use Model\TestSuite;
use Repository\TestFeatureRepository;
use Repository\TestSuiteRepository;
use Twig_Environment as TwigEnv;
use Twig_Loader_Filesystem as TwigLoader;
use Core\Controller;

class Home extends Controller
{
    private $requires = ['../app/Model/TestSuite.php' , '../app/Model/TestFeature.php', '../app/Repository/TestFeatureRepository.php'];

    public function __construct() {
        foreach($this->requires as $className) {
            require_once $className;
        }
    }
    /**
     * @param string $name name of model
     *
     * Handles main inputs received
     */
    public function main($name = '') {
        $user = $this->model('User');
        $user->name = $name;

        $loader = new TwigLoader('../app/View/home');
        $twig = new TwigEnv($loader, array('debug' => true,));

        $twig->addExtension(new \Twig_Extension_Debug());

        $this->repository('TestSuiteRepository');
        $this->repository('TestFeatureRepository');
        $allSuites = TestSuiteRepository::getInstance()->getAllTestSuites();


        echo $twig->render('index.html.twig', ['name' => $user->name, 'testSuites' => $allSuites]);

    }

    public function allSuitesJson() {

        $res = TestFeatureRepository::getInstance()->getAllFeaturesInSuite(new TestSuite($_POST['nameOfSuite'])); //object testsuite
        echo json_encode(array_values($res));
    }

    /**
     * @param $name
     *
     * Saves a new test suite
     */
    public function saveNewSuite() {
        var_dump('test');
        $this->repository('TestSuiteRepository');
        TestSuiteRepository::getInstance()->saveTestSuite(new TestSuite($_POST['newTestSuite']));

        return header('Location:' . 'http://127.0.0.1/alexa/public/', true, 302);
    }

    /**
     * @param $name
     * @param $suiteId
     *
     * Saves a new feature to given suite ID
     */
    public function saveNewFeature() {
        $this->repository('TestFeatureRepository');
        $this->repository('TestSuiteRepository');

        if(isset($_POST['newFeature']) && isset($_POST['testSuiteFeatureSelect'])) {
            $matchedTestSuite= TestSuiteRepository::getInstance()->getTestSuiteByName($_POST['testSuiteFeatureSelect']);
            TestFeatureRepository::getInstance()->saveTestFeatureToSuite(new TestFeature($_POST['newFeature'], $matchedTestSuite->getId()));
        }
        return header('Location:' . 'http://127.0.0.1/alexa/public/', true, 302);
    }
}