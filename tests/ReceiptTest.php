<?php
namespace TDD\Test;
require("vendor\autoload.php");

use PHPUnit\Framework\TestCase;
use TDD\Receipt;

// loome klassi, mis extendib TestCase-i
class ReceiptTest extends TestCase {
    // meetod, mis initsialiseerib objekti
    public function setup() {
        // initsialiseerime objekti ja paneme ta muutujasse
        $this->Receipt = new Receipt();
    }
    public function tearDown() {
        // hävitab muutuja
        unset($this->Receipt);
    }
    // funktsioon, mis testib numbrite liitmist massiivi sees
    public function testTotal() {
        // loome muutuja "input" ja seame ta väärtuseks massiivi numbritest
        $input = [0,2,5,8];
        // 
        $output = $this->Receipt->total($input);
        // PHPUniti testi meetod
        $this->assertEquals(
            // oodatav tulemus
            15,
            // kutsume objektist meetodi "total" ja anname talle ette massiivi numbritest
            $output,
            // vea puhul tagastatav teade
            "When summing the total should equal 15"
        );
    }
    public function testTax() {
        // paneme väärtuse 10.00 muutujasse "inputAmount"
        $inputAmount = 10.00;
        // paneme väärtuse 0.10 muutujasse "taxInput"
        $taxInput = 0.10;
        // kutsume Receipt objektist meetodi "tax", anname talle eelnevalt defineeritud 2 väärtust ning paneme selle muutujasse "output"
        $output = $this->Receipt->tax($inputAmount, $taxInput);
        // PHPUniti testi meetod
        $this->assertEquals(
            // oodatav väärtus
            1.00,
            // kutsume välja objekti meetodi, mida testime
            $output,
            // vea puhul tagastatav teade
            "Tax should equal 1.00"
        );
    }
}