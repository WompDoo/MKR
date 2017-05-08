<?php
/**
 * Created by PhpStorm.
 * User: DataKeyt
 * Date: 3.05.2017
 * Time: 16:30
 */
use Behat\Behat\Context\Context;
use Behat\MinkExtension\Context\MinkContext;
use Behat\Mink\Driver\Selenium2Driver;


class ProductInCartContext extends MinkContext implements Context
{

    /**
     * @Given I want to add a product to shopping cart
     */
    public function iWantToAddAProductToShoppingCart()
    {

    }

    /**
     * @BeforeScenario
     */

    public function AddProductToCart() {

        // Choose a Mink driver. More about it in later chapters.
        $driver = new \Behat\Mink\Driver\Selenium2Driver();

        $session = new \Behat\Mink\Session($driver);

        // start the session
        $session->start();

        // set cookie:
        $session->setCookie('cartSession', 'true');

        //visit some product's page
        $session->visit('http://localhost/MKR/product.php?id=5');

    }


    /**
     * @When /^I click ".btnAddAction"$/
     */
    public function iClick1()
    {
    }

    /**
     * Pauses the scenario until the user presses a key. Useful when debugging a scenario.
     *
     * @Then (I )break
     */
    public function iPutABreakpoint()
    {
        fwrite(STDOUT, "\033[s    \033[93m[Breakpoint] Press \033[1;93m[RETURN]\033[0;93m to continue...\033[0m");
        while (fgets(STDIN, 1024) == '') {}
        fwrite(STDOUT, "\033[u");
        return;
    }

    /**
     * Saving a screenshot
     *
     * @When I save a screenshot to :filename
     */
    public function iSaveAScreenshotIn($filename)
    {
        sleep(2);
        $this->saveScreenshot($filename, __DIR__.'/../..');
    }

    /**
     * @Given /^I wait (\d+)$/
     */
    public function iWait()
    {

        $this->getSession()->wait(1000);

    }

    /**
     * @Then /^I should see "\/\/\*\[@id="([^"]*)"\]\/p"$/
     */
    public function iShouldSeeNew_item_added()
    {

    }

    /**
     * @AfterScenario
     */
    public function EmptyCart() {

        $this->getSession()->setCookie('cartSession', null);

    }


}