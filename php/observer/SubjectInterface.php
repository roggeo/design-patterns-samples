<?php
/**
 * Observer Pattern.
 * 
 * Methods take an oberver as an argument. That is, the
 * oberserver to be registered or removed. And there is
 * a method called to notify all observers when
 * the Subject's state has changed.
 */

interface SubjectInterface
{
    public function registerObserver(ObserverInterface $o);
    public function removeObserver(ObserverInterface $o);
    public function notifyObservers();
} 
