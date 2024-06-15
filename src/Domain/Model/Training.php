<?php

namespace App\Domain\Model;

class Training
{
    private $id;
    private $topic;
    private $date;
    private $duration;
    private $location;

    private $candidates;

    /**
     * @param $topic
     * @param $date
     * @param $duration
     * @param $location
     */
    public function __construct($topic, $date, $duration, $location)
    {
        $this->topic = $topic;
        $this->date = $date;
        $this->duration = $duration;
        $this->location = $location;

        $this->candidates = [];
    }

    /**
     * @param Employee $candidate
     */
    public function addCandidate(Employee $candidate)
    {
        $this->candidates[] = $candidate;
    }

}
