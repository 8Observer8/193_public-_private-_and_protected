<?php

class BankAccount {
    public $balance = 3500;
    //private $balance = 3500;
    //protected $balance = 3500;

    public function displayBalance() {
        return $this->balance.'<br />';
    }
}

$alex = new BankAccount;
echo $alex->displayBalance();
echo $alex->balance;

/* Output
3500
3500
*/
?>
