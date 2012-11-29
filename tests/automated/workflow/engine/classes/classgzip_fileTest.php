<?php
require_once PATH_TRUNK . 'gulliver/thirdparty/smarty/libs/Smarty.class.php';
require_once PATH_TRUNK . 'gulliver/system/class.xmlform.php';
require_once PATH_TRUNK . 'gulliver/system/class.xmlDocument.php';
require_once PATH_TRUNK . 'gulliver/system/class.form.php';
require_once PATH_TRUNK . 'gulliver/system/class.dbconnection.php';
require_once PATH_TRUNK . 'gulliver/thirdparty/propel/Propel.php';
require_once PATH_TRUNK . 'gulliver/thirdparty/creole/Creole.php';
require_once PATH_TRUNK . 'gulliver/thirdparty/pear/PEAR.php';
require_once PATH_TRUNK . 'workflow/engine/classes/class.archive.php';

/**
 * Generated by ProcessMaker Test Unit Generator on 2012-07-12 at 22:32:30.
*/

class classgzip_fileTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var gzip_file
    */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
    */
    protected function setUp()
    {
        $this->object = new gzip_file('name');
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
    */
    protected function tearDown()
    {
    }

    /**
     * This is the default method to test, if the class still having 
     * the same number of methods.
    */
    public function testNumberOfMethodsInThisClass()
    {
        $methods = get_class_methods('gzip_file');
        $this->assertTrue( count($methods) == 18);
    }

    /**
    * @covers gzip_file::gzip_file
    * @todo   Implement testgzip_file().
    */
    public function testgzip_file()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('gzip_file', $methods ), 'exists method gzip_file' );
        $r = new ReflectionMethod('gzip_file', 'gzip_file');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'name');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
    }

    /**
    * @covers gzip_file::create_gzip
    * @todo   Implement testcreate_gzip().
    */
    public function testcreate_gzip()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('create_gzip', $methods ), 'exists method create_gzip' );
        $r = new ReflectionMethod('gzip_file', 'create_gzip');
        $params = $r->getParameters();
    }

    /**
    * @covers gzip_file::open_archive
    * @todo   Implement testopen_archive().
    */
    public function testopen_archive()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('open_archive', $methods ), 'exists method open_archive' );
        $r = new ReflectionMethod('gzip_file', 'open_archive');
        $params = $r->getParameters();
    }
}

