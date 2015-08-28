<?php
    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */

    require_once "src/Store.php";

    $server = 'mysql:host=localhost:8889;dbname=shoe_store_test';
    $username = 'root';
    $password = 'root';
    $DB = new PDO($server, $username, $password);

    class StoreTest extends PHPUnit_Framework_TestCase
    {
        protected function tearDown()
        {
            Store::deleteAll();
        }

        function testGetName()
        {
            //arrange
            $name = 'Payless';
            $id = null;
            $test_store = new Store($name, $id);

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
            $test_store = new Store($name, $id);

            //act
            $result = $test_store->getId();

            //assert
            $this->assertEquals($id, $result);
        }

        function testSave()
        {
            //arrange
            $name = 'Payless';
            $id = 1;
            $test_store = new Store($name);

            //act
            $test_store->save();

            //assert
            $result = Store::getAll();
            $this->assertEquals($test_store, $result[0]);
        }

        function testGetAll()
        {
            //arrange
            $name = 'Payless';
            $id = 1;
            $test_store = new Store($name, $id);
            $test_store->save();

            $name2 = 'Journey';
            $id2 = 2;
            $test_store2 = new Store($name2, $id2);
            $test_store2->save();

            //act
            $result = Store::getAll();

            //assert
            $this->assertEquals([$test_store, $test_store2], $result);
        }

        function testDeleteAll()
        {
            //arrange
            $name = 'Payless';
            $id = 1;
            $test_store = new Store($name, $id);
            $test_store->save();

            $name2 = 'Journey';
            $id2 = 2;
            $test_store2 = new Store($name2, $id2);
            $test_store2->save();

            //act
            Store::deleteAll();

            //assert
            $result = Store::getAll();
            $this->assertEquals([], $result);
        }
    }
?>
