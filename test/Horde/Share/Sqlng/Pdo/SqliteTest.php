<?php
/**
 * Prepare the test setup.
 */
require_once __DIR__ . '/../Base.php';

/**
 * Copyright 2010-2016 Horde LLC (http://www.horde.org/)
 *
 * @author     Jan Schneider <jan@horde.org>
 * @category   Horde
 * @package    Share
 * @subpackage UnitTests
 * @license    http://www.horde.org/licenses/lgpl21 LGPL 2.1
 */
class Horde_Share_Sqlng_Pdo_SqliteTest extends Horde_Share_Test_Sqlng_Base
{
    public static function setUpBeforeClass()
    {
        $factory_db = new Horde_Test_Factory_Db();

        try {
            self::$db = $factory_db->create();
            parent::setUpBeforeClass();
        } catch (Horde_Test_Exception $e) {
            self::$reason = 'Sqlite not available';
        }
    }
}
