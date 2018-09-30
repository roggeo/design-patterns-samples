<?php
/**
 * Observer Pattern.
 * 
 */

 class WeatherData implements SubjectInterface
 {
     /**
     * @var array
     */
    private $observers;

    /**
     * @var float
     */
    private $temperature;

    /**
     * @var float
     */
    private $humidity;

    /**
     * @var float
     */
    private $pressure;

    public function __construct()
    {
        $this->observers = array();
    }

    public function registerObserver(ObserverInterface $o)
    {
        $this->observers[] = $o;
    }

    public function removeObserver(ObserverInterface $o)
    {
        $i = array_search ($o, $this->observers);
        if ($i >= 0) {
            unset($this->observers[$i]);
        }
    }

    public function notifyObservers()
    {
        foreach ($this->observers as $key => $observer) {
            $observer->update($this->temperature, $this->humidity, $this->pressure);
        }
    }

    public function measurementsChanged()
    {
        $this->notifyObservers();
    }

    public function setMeasurements($temperature, $humidity, $pressure)
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;
        $this->measurementsChanged();
    }

 }