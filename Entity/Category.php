<?php


namespace Entity;


class Category implements \SplSubject
{
    protected $observers;
    protected $title;

    public function __construct($title)
    {
        $this->observers = new \SplObjectStorage();
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function attach(\SplObserver $observer)
    {
        $this->observers->attach($observer);
    }

    public function detach(\SplObserver $observer)
    {
        $this->observers->detach($observer);
    }

    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }


}