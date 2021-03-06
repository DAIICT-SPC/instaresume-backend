<?php
namespace InstaResume;

class Project
{
    /**
     * Project name
     * @var string
     */
    public $name;

    /**
     * Project description
     * @var string
     */
    public $description;

    /**
     * Project start
     * @var string
     */
    public $start;

    /**
     * Project end
     * @var string
     */
    public $end;

    /**
     * Project team_size
     * @var string
     */
    public $team_size;

    /**
     * Project guide
     * @var string|null
     */
    public $guide;

    /**
     * Project constructor.
     *
     * @param string      $name
     * @param string      $description
     * @param string      $start
     * @param string      $end
     * @param string      $team_size
     * @param string|null $guide
     */
    public function __construct($name, $description, $start, $end, $team_size, $guide = null)
    {
        $this->name = $name;
        $this->description = $description;
        $this->start = $start;
        $this->end = $end;
        $this->team_size = $team_size;
        $this->guide = $guide;
    }


}
