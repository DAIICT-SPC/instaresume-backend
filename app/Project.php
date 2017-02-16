<?php
namespace InstaResume;

class Project
{
    /**
     * Project title
     * @var string
     */
    public $title;

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
     * Project constructor.
     *
     * @param string $title
     * @param string $description
     * @param string $start
     * @param string $end
     * @param string $team_size
     */
    public function __construct($title, $description, $start, $end, $team_size)
    {
        $this->title = $title;
        $this->description = $description;
        $this->start = $start;
        $this->end = $end;
        $this->team_size = $team_size;
    }


}
