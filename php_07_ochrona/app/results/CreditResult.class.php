<?php

class CreditResult {

    private float $monthlyRate;

    public function __construct(float $monthlyRate) {
        $this->monthlyRate = $monthlyRate;
    }

    public function getMonthlyRate(): float {
        return $this->monthlyRate;
    }
}


