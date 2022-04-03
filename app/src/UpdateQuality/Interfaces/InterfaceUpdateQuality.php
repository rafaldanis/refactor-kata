<?php

namespace App\UpdateQuality\Interfaces;

interface InterfaceUpdateQuality
{
    /**
     *
     */
    public function calc(): void;

    /**
     * @return int
     */
    public function getSellIn(): int;

    /**
     * @return int
     */
    public function getQuality(): int;
}