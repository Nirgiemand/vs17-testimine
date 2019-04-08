<?php
namespace TDD;
// loome klassi Receipt
class Receipt {
    // funktsioon "total", mis võtab argumendiks massiivi
    public function total(array $items = []) {
        // tagastame massiivi väärtuste summa
        return array_sum($items);
    }
}