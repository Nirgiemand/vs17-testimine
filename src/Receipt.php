<?php
namespace TDD;
// loome klassi Receipt
class Receipt {
    // funktsioon "total", mis võtab argumendiks massiivi
    public function total(array $items = []) {
        // tagastame massiivi väärtuste summa
        return array_sum($items);
    }
    // funktsioon "tax", mis võtab argumendiks 2 arvu ja tagastab nende korrutise
    public function tax($amount, $tax) {
        // korrutab omavahel 2 arvu ja tagastab selle väärtuse
        return ($amount * $tax);
    }
}