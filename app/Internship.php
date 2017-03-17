<?php
namespace InstaResume;

class Internship
{
    /**
     * Internship name
     * @var string
     */
    public $name;

    /**
     * Internship description
     * @var string
     */
    public $description;

    /**
     * Internship start
     * @var string
     */
    public $start;

    /**
     * Internship end
     * @var string
     */
    public $end;

    /**
     * Internship team_size
     * @var string
     */
    public $team_size;

    /**
     * Internship constructor.
     *
     * @param string $name
     * @param string $description
     * @param string $start
     * @param string $end
     * @param string $team_size
     */
    public function __construct($name, $description, $start, $end, $team_size)
    {
        $this->name = $name;
        $this->description = $description;
        $this->start = $start;
        $this->end = $end;
        $this->team_size = $team_size;
    }


}
