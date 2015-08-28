<?php
    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */

    require_once "src/Store.php";

    $server = 'mysql:host=localhost:8889;dbname=library_test';
    $username = 'root';
    $password = 'root';
    $DB = new PDO($server, $username, $password);

    class StoreTest extends PHPUnit_Framework_TestCase
    {
        function testGetName()
        {
            //arrange
            $name = 'Payless';
            $id = null;
            $test_store = new Store($id, $name);

            //act
            $result = $test_store->getId();

            //assert
            $this->assertEquals($id, $result);
        }

        function testGetId()
        {
            //arrange
            $name = 'Payless';
            $id = 1;
            $test_store = new Store($id, $name);

            //act
            $result = $test_store->getId();

            //assert
            $this->assertEquals($id, $result);
        }
    }
?>
