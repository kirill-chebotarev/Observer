<?php


namespace Observer;


class User implements \SplObserver
{
    protected $email;
    protected $name;
    protected $experience;

    public function __construct($name, $email, $experience) {
        $this->name = $name;
        $this->email = $email;
        $this->experience = $experience;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getName() {
        return $this->name;
    }

    public function getExperience() {
        return $this->experience;
    }

    public function update(\SplSubject $subject)
    {
        //отправка на почту
        echo "Вакансия {$subject->getTitle()} для {$this->email}" . PHP_EOL;
    }
}