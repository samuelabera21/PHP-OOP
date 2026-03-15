<?php

declare(strict_types=1);

namespace OOP\Lesson07Encapsulation;

/*
 Step 1: Encapsulation class.
 Data is hidden with private access.
*/
class BankAccount
{
    private float $balance;

    public function __construct(float $initialBalance)
    {
        // Step 2: Protect object from invalid starting state.
        $this->balance = max(0, $initialBalance);
    }

    // Step 3: Safe read access to private data.
    public function getBalance(): float
    {
        return $this->balance;
    }

    // Step 4: Controlled update with validation.
    public function deposit(float $amount): string
    {
        if ($amount <= 0) {
            return 'Deposit failed: amount must be greater than 0.';
        }

        $this->balance += $amount;
        return "Deposit success: +{$amount}";
    }

    // Step 5: Controlled withdraw with rules.
    public function withdraw(float $amount): string
    {
        if ($amount <= 0) {
            return 'Withdraw failed: amount must be greater than 0.';
        }

        if ($amount > $this->balance) {
            return 'Withdraw failed: insufficient balance.';
        }

        $this->balance -= $amount;
        return "Withdraw success: -{$amount}";
    }
}

// Step 6: Use class through public methods only.
$account = new BankAccount(1000);

echo 'Initial balance: ' . $account->getBalance() . PHP_EOL;
echo $account->deposit(250) . PHP_EOL;
echo $account->withdraw(400) . PHP_EOL;
echo $account->withdraw(2000) . PHP_EOL;
echo $account->deposit(-50) . PHP_EOL;
echo 'Final balance: ' . $account->getBalance() . PHP_EOL;

// Not allowed (kept as comment): direct access to private property.
// $account->balance = 999999;
