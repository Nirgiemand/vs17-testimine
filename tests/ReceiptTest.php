<?php
namespace TDD\Test;
require("vendor\autoload.php");

use PHPUnit\Framework\TestCase;
use TDD\Receipt;

// loome klassi, mis extendib TestCase-i
class ReceiptTest extends TestCase {
    public function testTotal() {
        // loome objekti
        $Receipt = new Receipt();
        // PHPUniti testi meetod
        $this->assertEquals(
            // oodatav tulemus
            14,
            // kutsume objektist meetodi "total" ja anname talle ette massiivi numbritest
            $Receipt->total([0,2,5,8]),
            // vea puhul tagastatav teade
            "When summing the total should equal 15"
        );
    }
}