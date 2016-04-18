<?php
/**
 * Jaeger
 *
 * @author		Eric Lamb <eric@mithra62.com>
 * @copyright	Copyright (c) 2015-2016, mithra62, Eric Lamb
 * @link		http://jaeger-app.com
 * @version		1.0
 * @filesource 	./Console.php
 */
 
namespace JaegerApp;

/**
 * Jaeger - Console Output Object
 *
 * Handles outputting/writing data to the console 
 *
 * @package Platforms\Console
 * @author Eric Lamb <eric@mithra62.com>
 */
class Console
{
    /**
     * The arguments object
     * 
     * @var \cli\Arguments
     */
    protected $args = null;

    /**
     * The mithra62 Language object
     * 
     * @param
     *            Language
     */
    protected $lang = null;

    /**
     * The cli input string
     * 
     * @param string $tokens            
     */
    public function __construct()
    {}

    /**
     * Outputs an error to the console
     * 
     * @param string $error
     *            The language key for the message to display
     */
    public function outputError($error)
    {
        \cli\err($this->getLang()->__($error));
    }

    /**
     * Outputs a new line
     * 
     * @param string $string The output we want to display to the console out
     * @param bool $translate Whether the string should be sent through the mithra62\Language object
     * @return void
     */
    public function outputLine($string = '', $translate = true)
    {
        if ($translate) {
            \cli\line($this->getLang()->__($string));
        } else {
            \cli\line($string);
        }
    }

    /**
     * Adds a new line with page break
     */
    public function outputPageBreak()
    {
        \cli\line('');
        \cli\line('========================================================');
    }

    /**
     * An instance of the language object
     * 
     * @return \JaegerApp\Language
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * Sets the language object
     * 
     * @param Language $lang            
     * @return \JaegerApp\Console
     */
    public function setLang(Language $lang)
    {
        $this->lang = $lang;
        return $this;
    }

    /**
     * Returns the available commands the Console provides
     * @see \cli\Arguments
     * @param string $strict
     * @param string $force
     * @return \cli\Arguments
     */
    public function getArgs($strict = false, $force = false)
    {
        if (is_null($this->args) || $force) {
            $this->args = new \cli\Arguments($strict);
            $this->args->addFlag(array(
                'verbose',
                'v'
            ), 'Turn on verbose output');
            $this->args->addFlag('version', 'Display the version');
            $this->args->addFlag(array(
                'help',
                'h'
            ), 'Show this help screen');
        }
        
        return $this->args;
    }
}