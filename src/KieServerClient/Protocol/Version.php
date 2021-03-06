<?php
namespace KieServerClient\Protocol;

use Thrift\Base\TBase;
use Thrift\Type\TType;

/**
 * Autogenerated by Thrift Compiler (0.9.2)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
class Version extends TBase {
    static $_TSPEC;

    /**
     * @var int
     */
    public $major = null;
    /**
     * @var int
     */
    public $minor = null;
    /**
     * @var int
     */
    public $revision = null;
    /**
     * @var string
     */
    public $classifier = null;

    public function __construct($vals=null) {
        if (!isset(self::$_TSPEC)) {
            self::$_TSPEC = array(
                1 => array(
                    'var' => 'major',
                    'type' => TType::I32,
                ),
                2 => array(
                    'var' => 'minor',
                    'type' => TType::I32,
                ),
                3 => array(
                    'var' => 'revision',
                    'type' => TType::I32,
                ),
                4 => array(
                    'var' => 'classifier',
                    'type' => TType::STRING,
                ),
            );
        }
        if (is_array($vals)) {
            parent::__construct(self::$_TSPEC, $vals);
        }
    }

    public function getName() {
        return 'Version';
    }

    public function read($input)
    {
        return $this->_read('Version', self::$_TSPEC, $input);
    }

    public function write($output) {
        return $this->_write('Version', self::$_TSPEC, $output);
    }

}
