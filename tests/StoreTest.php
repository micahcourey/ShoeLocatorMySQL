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
            //Arrange
            $name = 'Payless';
            $id = null;
            $test_store = new Store($name, $id);

            //Act
            $result = $test_store->getId();

            //Assert
            $this->assertEquals($id, $result);
        }

        function testGetId()
        {
            //Arrange
            $name = 'Payless';
            $id = 1;
            $test_store = new Store($name, $id);

            //Act
            $result = $test_store->getId();

            //Assert
            $this->assertEquals($id, $result);
        }

        function testSave()
        {
            //Arrange
            $name = 'Payless';
            $id = 1;
            $test_store = new Store($name);

            //Act
            $test_store->save();

            //Assert
            $result = Store::getAll();
            $this->assertEquals($test_store, $result[0]);
        }

        function testGetAll()
        {
            //Arrange
            $name = 'Payless';
            $id = 1;
            $test_store = new Store($name, $id);
            $test_store->save();

            $name2 = 'Journey';
            $id2 = 2;
            $test_store2 = new Store($name2, $id2);
            $test_store2->save();

            //Act
            $result = Store::getAll();

            //Assert
            $this->assertEquals([$test_store, $test_store2], $result);
        }

        function testDeleteAll()
        {
            //Arrange
            $name = 'Payless';
            $id = 1;
            $test_store = new Store($name, $id);
            $test_store->save();

            $name2 = 'Journey';
            $id2 = 2;
            $test_store2 = new Store($name2, $id2);
            $test_store2->save();

            //Act
            Store::deleteAll();

            //Assert
            $result = Store::getAll();
            $this->assertEquals([], $result);
        }

        function testFind()
        {
            //Assert
            $name = 'Payless';
            $id = 1;
            $test_store = new Store($name, $id);
            $test_store->save();

            $name2 = 'Journey';
            $id2 = 2;
            $test_store2 = new Store($name2, $id2);
            $test_store2->save();

            //Act
            $id = $test_store->getId();
            $result = Store::find($id);

            //Assert
            $this->assertEquals($test_store, $result);
        }

        function testUpdate()
        {
            //Arrange
            $name = 'Payless';
            $id = 1;
            $test_store = new Store($name, $id);
            $test_store->save();

            $new_name = 'Payme';

            //Act
            $test_store->update($new_name);

            //Assert
            $this->assertEquals('Payme', $test_store->getName());
        }

        function testDeleteStore()
        {
            //Assert
            $name = 'Payless';
            $id = 1;
            $test_store = new Store($name, $id);
            $test_store->save();

            $name2 = 'Journey';
            $id2 = 2;
            $test_store2 = new Store($name2, $id2);
            $test_store2->save();

            //Act
            $test_store->delete();

            //Assert
            $this->assertEquals([$test_store2], Store::getAll());
        }

    }
?>
