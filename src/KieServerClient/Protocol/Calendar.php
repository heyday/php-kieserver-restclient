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
class Calendar extends TBase {
    static $_TSPEC;

    /**
     * @var int
     */
    public $year = null;
    /**
     * @var int
     */
    public $month = null;
    /**
     * @var int
     */
    public $day_of_month = null;
    /**
     * @var int
     */
    public $hour_of_day = 0;
    /**
     * @var int
     */
    public $minute = 0;
    /**
     * @var int
     */
    public $second = 0;

    public function __construct($vals=null) {
        if (!isset(self::$_TSPEC)) {
            self::$_TSPEC = array(
                1 => array(
                    'var' => 'year',
                    'type' => TType::I32,
                ),
                2 => array(
                    'var' => 'month',
                    'type' => TType::I32,
                ),
                3 => array(
                    'var' => 'day_of_month',
                    'type' => TType::I32,
                ),
                4 => array(
                    'var' => 'hour_of_day',
                    'type' => TType::I32,
                ),
                5 => array(
                    'var' => 'minute',
                    'type' => TType::I32,
                ),
                6 => array(
                    'var' => 'second',
                    'type' => TType::I32,
                ),
            );
        }
        if (is_array($vals)) {
            parent::__construct(self::$_TSPEC, $vals);
        }
    }

    public function getName() {
        return 'Calendar';
    }

    public function read($input)
    {
        return $this->_read('Calendar', self::$_TSPEC, $input);
    }

    public function write($output) {
        return $this->_write('Calendar', self::$_TSPEC, $output);
    }

}