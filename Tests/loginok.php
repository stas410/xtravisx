<?php
require_once 'PHPUnit/Extensions/SeleniumTestCase.php';
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
    $this->type("id=edit-name", "MasterAdmin");
    $this->type("id=edit-pass", "12345678ra");
    $this->selectWindow("null");
    $this->click("id=edit-submit");
    $this->waitForPageToLoad("30000");
    $this->assertTrue($this->isElementPresent("link=Log out"));
  }
}
?>
