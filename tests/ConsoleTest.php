<?php
/**
 * Jaeger
 *
 * @copyright	Copyright (c) 2015-2016, mithra62
 * @link		http://jaeger-app.com
 * @version		1.0
 * @filesource 	./tests/DbTest.php
 */
namespace JaegerApp\tests;

use JaegerApp\Console;
use JaegerApp\Language;

/**
 * JaegerApp - Db object Unit Tests
 *
 * Contains all the unit tests for the \mithra62\Db object
 *
 * @package JaegerApp\Tests
 * @author Eric Lamb <eric@mithra62.com>
 */
class ConsoleTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @todo learn how to write console unit tests
     */
    public function testGetLangDefaultValue()
    {
        $console = new Console();
        $this->assertNull($console->getLang());
    }
    
    public function testSetLangReturnInstance()
    {
        $console = new Console();
        $this->assertInstanceOf('JaegerApp\Console', $console->setLang(new Language()));
    }
    
    public function testSetLangGetLangValue()
    {
        $console = new Console();
        $console->setLang(new Language());
        $this->assertInstanceOf('JaegerApp\Language', $console->getLang());
    }
}