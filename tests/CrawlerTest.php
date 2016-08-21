<?php
 
use KrzysztofSadowski\Crawler\Crawler;
 
class CrawlerTest extends PHPUnit_Framework_TestCase {
 
  public function testDummy()
  {
    $crawler = new Crawler;
    $this->assertTrue($crawler->hasCheese());
  }
 
}
