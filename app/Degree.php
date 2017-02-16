<?php
namespace InstaResume;

class Degree
{
    /**
     * Degree name
     * @var string
     */
    public $name;

    /**
     * Degree institute
     * @var string
     */
    public $institute;

    /**
     * Degree duration
     * @var string
     */
    public $duration;

    /**
     * Degree score
     * @var string
     */
    public $score;

    /**
     * Degree constructor.
     *
     * @param string $name
     * @param string $institute
     * @param string $duration
     * @param string $score
     */
    public function __construct($name, $institute, $duration, $score)
    {
        $this->name = $name;
        $this->institute = $institute;
        $this->duration = $duration;
        $this->score = $score;
    }


}
