<?php

require_once 'vendor/phpunit/phpunit-selenium/PHPUnit/Extensions/SeleniumTestCase.php';
require_once 'vendor/phpunit/phpunit-selenium/PHPUnit/Extensions/SeleniumTestSuite.php';
require_once 'vendor/phpunit/phpunit-selenium/PHPUnit/Extensions/SeleniumTestCase/Driver.php';

class loginok extends PHPUnit_Extensions_SeleniumTestCase
{
  protected function setUp()
  {
    $this->setBrowser("*chrome");
    $this->setBrowserUrl("http://127.0.0.1/");
  }

  public function testloginok()
  {
    $this->open("/");
    $this->type("id=edit-name", "admin");
    $this->type("id=edit-pass", "admin");
    $this->selectWindow("null");
    $this->click("id=edit-submit");
    $this->waitForPageToLoad("30000");
    $this->assertTrue($this->isElementPresent("link=Log out"));
  }
}

?>
