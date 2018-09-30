<?php
/**
 * Observer Pattern.
 * 
 * The Observer interface is implemented by all
 * observers, so they all have to implement the
 * update() method.
 */

interface ObserverInterface
{
    public function update($temp, $humidity, $pressure);
} 
