<?php
class Bank {
    private $account_number;
    private $current_balance;

    public function __construct($account_number, $current_balance) {
        $this->account_number = $account_number;
        $this->current_balance = $current_balance;
    }

    public function deposit($amount) {
        $this->current_balance += $amount;
    }

    public function withdraw($amount) {
        if ($this->current_balance >= $amount) {
            $this->current_balance -= $amount;
        } else {
            echo "Insufficient balance.";
        }
    }

    public function displayAccountInfo() {
        echo "Account Number: " . $this->account_number . "<br>";
        echo "Current Balance: " . $this->current_balance . "<br>";
    }
}

if (isset($_POST['withdraw']) || isset($_POST['deposit'])) {
    $account_number = $_POST["account_number"];
    $current_balance = $_POST["current_balance"];
    $amount = $_POST["amount"];

    $bank = new Bank($account_number, $current_balance);

    if (isset($_POST["deposit"])) {
        $bank->deposit($amount);
    } elseif (isset($_POST["withdraw"])) {
        $bank->withdraw($amount);
    }

    $bank->displayAccountInfo();
}
?>
