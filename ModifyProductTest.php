<?php
require 'vendor/autoload.php';
require 'ModifyProducts.php';
class ModifyProductTest extends \PHPUnit\Framework\TestCase
{

    /**
     * @test
     */
    public function addProductTest()
    {
        /**
         * Given I have a modal box with form
         * If I insert the product data into the modal
         * I see new product in 'Furniture' category
         */

        $modProducts = new ModifyProducts();
        $result = $modProducts->addProduct('Testtoode', 'Furniture', 'See on hea toode', 39.99, 2, 'TEST11');
        $result = !is_nan($result);

        $expectedResult = true;

        $this->assertEquals($expectedResult, $result, 'Product was not inserted!');
    }

    /**
     * @test
     */
    public function EditProductTest()
    {
        /**
         * Given I want to modify an existing product
         * If I insert the ID of the product and new price
         * I see new product's price changing
         */

        $modProducts = new ModifyProducts();
        $result = $modProducts->editProduct(1, 300);
        $result = !is_nan($result);

        $expectedResult = true;

        $this->assertEquals($expectedResult, $result, 'Price was not updated!');
    }


    /**
     * @test
     */
    public function addImageTest()
    {
        /**
         * Given I want to add a picture to the product
         * If I insert the product ID and image
         * I see new thumbnail for the product
         */
        $modProducts = new ModifyProducts();
        $result = $modProducts->addImage(1, 'testpilt', 'MKR/uploads/');
        $result = !is_nan($result);

        $expectedResult = true;

        $this->assertEquals($expectedResult, $result, 'Image was not added!');
    }
}