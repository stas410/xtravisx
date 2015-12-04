<?php

require_once 'vendor/phpunit/phpunit-selenium/PHPUnit/Extensions/SeleniumTestCase.php';
require_once 'vendor/phpunit/phpunit-selenium/PHPUnit/Extensions/SeleniumTestSuite.php';
require_once 'vendor/phpunit/phpunit-selenium/PHPUnit/Extensions/SeleniumTestCase/Driver.php';

class loginbad extends PHPUnit_Extensions_SeleniumTestCase
{
  protected function setUp()
  {
    $this->setBrowser("*chrome");
    $this->setBrowserUrl("http://127.0.0.1/");
  }

  public function testlogibad()
{
    $this->open("/");
    $this->type("id=edit-name", "MasterAdmin");
    $this->type("id=edit-pass", "12345678x");
    $this->click("id=edit-submit");
    $this->waitForPageToLoad("30000");
    try {
        $this->assertTrue((bool)preg_match('/^exact:Error message Sorry, unrecognized username or password\. Have you forgotten your password[\s\S]$/',$this->getText("css=div.messages.error")));
    } catch (PHPUnit_Framework_AssertionFailedError $e) {
        array_push($this->verificationErrors, $e->toString());
    }
  }
}
?>
