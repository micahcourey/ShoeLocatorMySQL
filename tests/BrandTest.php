<?php
    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */

    require_once "src/Brand.php";
    require_once "src/Store.php";

    $server = 'mysql:host=localhost:8889;dbname=shoe_store_test';
    $username = 'root';
    $password = 'root';
    $DB = new PDO($server, $username, $password);

    class BrandTest extends PHPUnit_Framework_TestCase
    {
        protected function tearDown()
        {
            Brand::deleteAll();
            Store::deleteAll();
        }

        function testGetName()
        {
            //Arrange
            $name = 'Gucci';
            $id = null;
            $test_brand = new Brand($name, $id);

            //Act
            $result = $test_brand->getId();

            //Assert
            $this->assertEquals($id, $result);
        }

        function testGetId()
        {
            //Arrange
            $name = 'Gucci';
            $id = 1;
            $test_brand = new Brand($name, $id);

            //Act
            $result = $test_brand->getId();

            //Assert
            $this->assertEquals($id, $result);
        }

        function testSave()
        {
            //Arrange
            $name = 'Puma';
            $id = 1;
            $test_brand = new Brand($name);

            //Act
            $test_brand->save();

            //Assert
            $result = Brand::getAll();
            $this->assertEquals($test_brand, $result[0]);
        }

        function testGetAll()
        {
            //Arrange
            $name = 'Gucci';
            $id = 1;
            $test_brand = new Brand($name, $id);
            $test_brand->save();

            $name2 = 'Prada';
            $id2 = 2;
            $test_brand2 = new Brand($name2, $id2);
            $test_brand2->save();

            //Act
            $result = Brand::getAll();

            //Assert
            $this->assertEquals([$test_brand, $test_brand2], $result);
        }

        function testDeleteAll()
        {
            //Arrange
            $name = 'Gucci';
            $id = 1;
            $test_brand = new Brand($name, $id);
            $test_brand->save();

            $name2 = 'Prada';
            $id2 = 2;
            $test_brand2 = new Brand($name2, $id2);
            $test_brand2->save();

            //Act
            Brand::deleteAll();

            //Assert
            $result = Brand::getAll();
            $this->assertEquals([], $result);
        }

        function testFind()
        {
            //Assert
            $name = 'Gucci';
            $id = 1;
            $test_brand = new Brand($name, $id);
            $test_brand->save();

            $name2 = 'Prada';
            $id2 = 2;
            $test_brand2 = new Brand($name2, $id2);
            $test_brand2->save();

            //Act
            $id = $test_brand->getId();
            $result = Brand::find($id);

            //Assert
            $this->assertEquals($test_brand, $result);
        }

        function testUpdate()
        {
            //Arrange
            $name = 'Gucci';
            $id = 1;
            $test_brand = new Brand($name, $id);
            $test_brand->save();

            $new_name = 'Prada';

            //Act
            $test_brand->update($new_name);

            //Assert
            $this->assertEquals('Prada', $test_brand->getName());
        }

        function testDeleteBrand()
        {
            //Assert
            $name = 'Nike';
            $id = 1;
            $test_brand = new Brand($name, $id);
            $test_brand->save();

            $name2 = 'DC';
            $id2 = 2;
            $test_brand2 = new Brand($name2, $id2);
            $test_brand2->save();

            //Act
            $test_brand->delete();

            //Assert
            $this->assertEquals([$test_brand2], Brand::getAll());
        }

        function testAddStore()
        {
            //arrange
            $name = 'Gucci';
            $id = 1;
            $test_brand = new Brand($name, $id);
            $test_brand->save();

            $name = 'Payless';
            $id2 = 2;
            $test_store = new Store($name, $id2);
            $test_store->save();

            //act
            $test_brand->addStore($test_store);

            //assert
            $this->assertEquals($test_brand->getStores(), [$test_store]);
        }



    }
?>
