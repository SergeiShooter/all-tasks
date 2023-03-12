<?php
interface iTariffe
{
    public function countPrice(): int;
    public function addService(iService $service): self;
    public function getMinutes(): int;
    public function getDistance(): int;
}
