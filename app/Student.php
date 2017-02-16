<?php
namespace InstaResume;

class Student
{
    /**
     * Student name
     *
     * @var string
     */
    public $name;

    /**
     * Student email
     *
     * @var string
     */
    public $email;

    /**
     * Student dob
     *
     * @var string
     */
    public $dob;

    /**
     * Student address
     *
     * @var string
     */
    public $address;

    /**
     * Student degrees
     *
     * @var array
     */
    public $degrees = [];

    /**
     * Student expertise
     *
     * @var string
     */
    public $expertise;

    /**
     * Student programming_languages
     *
     * @var string
     */
    public $programming_languages;

    /**
     * Student tools
     *
     * @var string
     */
    public $tools;

    /**
     * Student projects
     *
     * @var array
     */
    public $projects = [];

    /**
     * Student awards
     *
     * @var array
     */
    public $awards = [];

    /**
     * Student hobbies
     *
     * @var array
     */
    public $hobbies = [];

    /**
     * Student constructor.
     *
     * @param string $name
     * @param string $email
     * @param string $dob
     * @param string $address
     * @param string $expertise
     * @param string $programming_languages
     * @param string $tools
     */
    public function __construct($name, $email, $dob, $address, $expertise, $programming_languages, $tools)
    {
        $this->name = $name;
        $this->email = $email;
        $this->dob = $dob;
        $this->address = $address;
        $this->expertise = $expertise;
        $this->programming_languages = $programming_languages;
        $this->tools = $tools;
    }


}
