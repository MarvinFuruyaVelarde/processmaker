<?php
require_once PATH_TRUNK . 'gulliver/thirdparty/smarty/libs/Smarty.class.php';
require_once PATH_TRUNK . 'gulliver/system/class.xmlform.php';
require_once PATH_TRUNK . 'gulliver/system/class.xmlDocument.php';
require_once PATH_TRUNK . 'gulliver/system/class.form.php';
require_once PATH_TRUNK . 'gulliver/system/class.dbconnection.php';
require_once PATH_TRUNK . 'gulliver/thirdparty/propel/Propel.php';
require_once PATH_TRUNK . 'gulliver/thirdparty/creole/Creole.php';
require_once PATH_TRUNK . 'gulliver/thirdparty/pear/PEAR.php';
require_once PATH_TRUNK . 'gulliver/system/class.table.php';

/**
 * Generated by ProcessMaker Test Unit Generator on 2012-07-12 at 22:32:24.
*/

class classTableTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Table
    */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
    */
    protected function setUp()
    {
        $this->object = new Table();
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
        $methods = get_class_methods('Table');        $this->assertTrue( count($methods) == 23);
    }

    /**
    * @covers Table::Table
    * @todo   Implement testTable().
    */
    public function testTable()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('Table', $methods ), 'exists method Table' );
        $r = new ReflectionMethod('Table', 'Table');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'objConnection');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == true);
        $this->assertTrue( $params[0]->getDefaultValue() == '');
    } 

    /**
    * @covers Table::SetTo
    * @todo   Implement testSetTo().
    */
    public function testSetTo()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('SetTo', $methods ), 'exists method SetTo' );
        $r = new ReflectionMethod('Table', 'SetTo');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'objConnection');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == true);
        $this->assertTrue( $params[0]->getDefaultValue() == '');
    } 

    /**
    * @covers Table::SetSource
    * @todo   Implement testSetSource().
    */
    public function testSetSource()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('SetSource', $methods ), 'exists method SetSource' );
        $r = new ReflectionMethod('Table', 'SetSource');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'stQry');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == true);
        $this->assertTrue( $params[0]->getDefaultValue() == '');
        $this->assertTrue( $params[1]->getName() == 'stDefaultOrder');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == true);
        $this->assertTrue( $params[1]->getDefaultValue() == 'UID');
        $this->assertTrue( $params[2]->getName() == 'stDefaultOrderDir');
        $this->assertTrue( $params[2]->isArray() == false);
        $this->assertTrue( $params[2]->isOptional () == true);
        $this->assertTrue( $params[2]->getDefaultValue() == 'ASC');
    } 

    /**
    * @covers Table::GetSource
    * @todo   Implement testGetSource().
    */
    public function testGetSource()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('GetSource', $methods ), 'exists method GetSource' );
        $r = new ReflectionMethod('Table', 'GetSource');
        $params = $r->getParameters();
    } 

    /**
    * @covers Table::TotalCount
    * @todo   Implement testTotalCount().
    */
    public function testTotalCount()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('TotalCount', $methods ), 'exists method TotalCount' );
        $r = new ReflectionMethod('Table', 'TotalCount');
        $params = $r->getParameters();
    } 

    /**
    * @covers Table::Count
    * @todo   Implement testCount().
    */
    public function testCount()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('Count', $methods ), 'exists method Count' );
        $r = new ReflectionMethod('Table', 'Count');
        $params = $r->getParameters();
    } 

    /**
    * @covers Table::CurRow
    * @todo   Implement testCurRow().
    */
    public function testCurRow()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('CurRow', $methods ), 'exists method CurRow' );
        $r = new ReflectionMethod('Table', 'CurRow');
        $params = $r->getParameters();
    } 

    /**
    * @covers Table::ColumnCount
    * @todo   Implement testColumnCount().
    */
    public function testColumnCount()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('ColumnCount', $methods ), 'exists method ColumnCount' );
        $r = new ReflectionMethod('Table', 'ColumnCount');
        $params = $r->getParameters();
    } 

    /**
    * @covers Table::Read
    * @todo   Implement testRead().
    */
    public function testRead()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('Read', $methods ), 'exists method Read' );
        $r = new ReflectionMethod('Table', 'Read');
        $params = $r->getParameters();
    } 

    /**
    * @covers Table::Seek
    * @todo   Implement testSeek().
    */
    public function testSeek()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('Seek', $methods ), 'exists method Seek' );
        $r = new ReflectionMethod('Table', 'Seek');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'intPos');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == true);
        $this->assertTrue( $params[0]->getDefaultValue() == '0');
    } 

    /**
    * @covers Table::MoveFirst
    * @todo   Implement testMoveFirst().
    */
    public function testMoveFirst()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('MoveFirst', $methods ), 'exists method MoveFirst' );
        $r = new ReflectionMethod('Table', 'MoveFirst');
        $params = $r->getParameters();
    } 

    /**
    * @covers Table::EOF
    * @todo   Implement testEOF().
    */
    public function testEOF()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('EOF', $methods ), 'exists method EOF' );
        $r = new ReflectionMethod('Table', 'EOF');
        $params = $r->getParameters();
    } 

    /**
    * @covers Table::AddColumn
    * @todo   Implement testAddColumn().
    */
    public function testAddColumn()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('AddColumn', $methods ), 'exists method AddColumn' );
        $r = new ReflectionMethod('Table', 'AddColumn');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'strLabel');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == true);
        $this->assertTrue( $params[0]->getDefaultValue() == '');
        $this->assertTrue( $params[1]->getName() == 'strType');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == true);
        $this->assertTrue( $params[1]->getDefaultValue() == 'text');
        $this->assertTrue( $params[2]->getName() == 'strName');
        $this->assertTrue( $params[2]->isArray() == false);
        $this->assertTrue( $params[2]->isOptional () == true);
        $this->assertTrue( $params[2]->getDefaultValue() == '');
        $this->assertTrue( $params[3]->getName() == 'strAlign');
        $this->assertTrue( $params[3]->isArray() == false);
        $this->assertTrue( $params[3]->isOptional () == true);
        $this->assertTrue( $params[3]->getDefaultValue() == 'left');
        $this->assertTrue( $params[4]->getName() == 'intWidth');
        $this->assertTrue( $params[4]->isArray() == false);
        $this->assertTrue( $params[4]->isOptional () == true);
        $this->assertTrue( $params[4]->getDefaultValue() == '0');
        $this->assertTrue( $params[5]->getName() == 'strTarget');
        $this->assertTrue( $params[5]->isArray() == false);
        $this->assertTrue( $params[5]->isOptional () == true);
        $this->assertTrue( $params[5]->getDefaultValue() == '');
        $this->assertTrue( $params[6]->getName() == 'strContent');
        $this->assertTrue( $params[6]->isArray() == false);
        $this->assertTrue( $params[6]->isOptional () == true);
        $this->assertTrue( $params[6]->getDefaultValue() == '');
    } 

    /**
    * @covers Table::AddRawColumn
    * @todo   Implement testAddRawColumn().
    */
    public function testAddRawColumn()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('AddRawColumn', $methods ), 'exists method AddRawColumn' );
        $r = new ReflectionMethod('Table', 'AddRawColumn');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'strType');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == true);
        $this->assertTrue( $params[0]->getDefaultValue() == 'text');
        $this->assertTrue( $params[1]->getName() == 'strName');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == true);
        $this->assertTrue( $params[1]->getDefaultValue() == '');
        $this->assertTrue( $params[2]->getName() == 'strAlign');
        $this->assertTrue( $params[2]->isArray() == false);
        $this->assertTrue( $params[2]->isOptional () == true);
        $this->assertTrue( $params[2]->getDefaultValue() == 'left');
        $this->assertTrue( $params[3]->getName() == 'intWidth');
        $this->assertTrue( $params[3]->isArray() == false);
        $this->assertTrue( $params[3]->isOptional () == true);
        $this->assertTrue( $params[3]->getDefaultValue() == '0');
        $this->assertTrue( $params[4]->getName() == 'strTarget');
        $this->assertTrue( $params[4]->isArray() == false);
        $this->assertTrue( $params[4]->isOptional () == true);
        $this->assertTrue( $params[4]->getDefaultValue() == '');
        $this->assertTrue( $params[5]->getName() == 'strContent');
        $this->assertTrue( $params[5]->isArray() == false);
        $this->assertTrue( $params[5]->isOptional () == true);
        $this->assertTrue( $params[5]->getDefaultValue() == '');
        $this->assertTrue( $params[6]->getName() == 'strExtra');
        $this->assertTrue( $params[6]->isArray() == false);
        $this->assertTrue( $params[6]->isOptional () == true);
        $this->assertTrue( $params[6]->getDefaultValue() == '');
        $this->assertTrue( $params[7]->getName() == 'strCondition');
        $this->assertTrue( $params[7]->isArray() == false);
        $this->assertTrue( $params[7]->isOptional () == true);
        $this->assertTrue( $params[7]->getDefaultValue() == '');
        $this->assertTrue( $params[8]->getName() == 'orderByThis');
        $this->assertTrue( $params[8]->isArray() == false);
        $this->assertTrue( $params[8]->isOptional () == true);
        $this->assertTrue( $params[8]->getDefaultValue() == '1');
    } 

    /**
    * @covers Table::RenderTitle
    * @todo   Implement testRenderTitle().
    */
    public function testRenderTitle()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('RenderTitle', $methods ), 'exists method RenderTitle' );
        $r = new ReflectionMethod('Table', 'RenderTitle');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'pa');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'intPos');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == true);
        $this->assertTrue( $params[1]->getDefaultValue() == '1');
        $this->assertTrue( $params[2]->getName() == 'strClass');
        $this->assertTrue( $params[2]->isArray() == false);
        $this->assertTrue( $params[2]->isOptional () == true);
        $this->assertTrue( $params[2]->getDefaultValue() == 'tblHeader');
    } 

    /**
    * @covers Table::RenderTitle_ajax
    * @todo   Implement testRenderTitle_ajax().
    */
    public function testRenderTitle_ajax()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('RenderTitle_ajax', $methods ), 'exists method RenderTitle_ajax' );
        $r = new ReflectionMethod('Table', 'RenderTitle_ajax');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'pa');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'intPos');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == true);
        $this->assertTrue( $params[1]->getDefaultValue() == '1');
        $this->assertTrue( $params[2]->getName() == 'strClass');
        $this->assertTrue( $params[2]->isArray() == false);
        $this->assertTrue( $params[2]->isOptional () == true);
        $this->assertTrue( $params[2]->getDefaultValue() == 'tblHeader');
    } 

    /**
    * @covers Table::RenderTitle2
    * @todo   Implement testRenderTitle2().
    */
    public function testRenderTitle2()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('RenderTitle2', $methods ), 'exists method RenderTitle2' );
        $r = new ReflectionMethod('Table', 'RenderTitle2');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'pa');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'fil');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == false);
        $this->assertTrue( $params[2]->getName() == 'intPos');
        $this->assertTrue( $params[2]->isArray() == false);
        $this->assertTrue( $params[2]->isOptional () == false);
        $this->assertTrue( $params[3]->getName() == 'strClass');
        $this->assertTrue( $params[3]->isArray() == false);
        $this->assertTrue( $params[3]->isOptional () == true);
        $this->assertTrue( $params[3]->getDefaultValue() == 'tblHeader');
        $this->assertTrue( $params[4]->getName() == 'auxgetval');
        $this->assertTrue( $params[4]->isArray() == false);
        $this->assertTrue( $params[4]->isOptional () == true);
        $this->assertTrue( $params[4]->getDefaultValue() == '');
    } 

    /**
    * @covers Table::RenderColumn
    * @todo   Implement testRenderColumn().
    */
    public function testRenderColumn()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('RenderColumn', $methods ), 'exists method RenderColumn' );
        $r = new ReflectionMethod('Table', 'RenderColumn');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'intPos');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == true);
        $this->assertTrue( $params[0]->getDefaultValue() == '0');
        $this->assertTrue( $params[1]->getName() == 'strClass');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == true);
        $this->assertTrue( $params[1]->getDefaultValue() == 'tblCell');
        $this->assertTrue( $params[2]->getName() == 'strClassLink');
        $this->assertTrue( $params[2]->isArray() == false);
        $this->assertTrue( $params[2]->isOptional () == true);
        $this->assertTrue( $params[2]->getDefaultValue() == 'tblCellA');
        $this->assertTrue( $params[3]->getName() == 'number');
        $this->assertTrue( $params[3]->isArray() == false);
        $this->assertTrue( $params[3]->isOptional () == true);
        $this->assertTrue( $params[3]->getDefaultValue() == '0');
        $this->assertTrue( $params[4]->getName() == 'renderTD');
        $this->assertTrue( $params[4]->isArray() == false);
        $this->assertTrue( $params[4]->isOptional () == true);
        $this->assertTrue( $params[4]->getDefaultValue() == '1');
    } 

    /**
    * @covers Table::SetAction
    * @todo   Implement testSetAction().
    */
    public function testSetAction()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('SetAction', $methods ), 'exists method SetAction' );
        $r = new ReflectionMethod('Table', 'SetAction');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'strAction');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'strLabel');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == true);
        $this->assertTrue( $params[1]->getDefaultValue() == 'Continue');
    } 

    /**
    * @covers Table::setTranslate
    * @todo   Implement testsetTranslate().
    */
    public function testsetTranslate()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('setTranslate', $methods ), 'exists method setTranslate' );
        $r = new ReflectionMethod('Table', 'setTranslate');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'contexto');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'tabla');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == false);
        $this->assertTrue( $params[2]->getName() == 'nombre');
        $this->assertTrue( $params[2]->isArray() == false);
        $this->assertTrue( $params[2]->isOptional () == false);
    } 

    /**
    * @covers Table::translateValue
    * @todo   Implement testtranslateValue().
    */
    public function testtranslateValue()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('translateValue', $methods ), 'exists method translateValue' );
        $r = new ReflectionMethod('Table', 'translateValue');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'contexto');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'valor');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == false);
        $this->assertTrue( $params[2]->getName() == 'lang');
        $this->assertTrue( $params[2]->isArray() == false);
        $this->assertTrue( $params[2]->isOptional () == false);
    } 

    /**
    * @covers Table::setContext
    * @todo   Implement testsetContext().
    */
    public function testsetContext()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('setContext', $methods ), 'exists method setContext' );
        $r = new ReflectionMethod('Table', 'setContext');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'contexto');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
    } 

    /**
    * @covers Table::ParsingFromHtml
    * @todo   Implement testParsingFromHtml().
    */
    public function testParsingFromHtml()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('ParsingFromHtml', $methods ), 'exists method ParsingFromHtml' );
        $r = new ReflectionMethod('Table', 'ParsingFromHtml');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'value');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'number');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == true);
        $this->assertTrue( $params[1]->getDefaultValue() == '100000000');
    } 

  } 
