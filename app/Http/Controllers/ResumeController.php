<?php
namespace InstaResume\Http\Controllers;

use Illuminate\Http\Request;
use InstaResume\Degree;
use InstaResume\Project;
use InstaResume\Student;

class ResumeController extends Controller
{

    public function generate(Request $request)
    {
        $pdf = app('dompdf.wrapper');

        $name = "John Doe";
        $email = "#########@daiict.ac.in";
        $address = "My address";
        $dob = "February 29, 1600";
        $expertise = "Web Development, API Development, Open Source";
        $programming_languages = "PHP, JavaScript, Java, C";
        $tools = "Laravel, VueJS, Gulp, Socket.io, ReactJS, Github, AWS, Digital Ocean";

        $student = new Student(
            $name,
            $email,
            $dob,
            $address,
            $expertise,
            $programming_languages,
            $tools
        );

        $degrees = [
            [
                "name" => "BSc. (IT)",
                "institute" => "Department of Computer Science",
                "duration" => "2013 - 2016",
                "score" => "8.01",
            ],
            [
                "name" => "Intermediate/+2",
                "institute" => "St. Ann's High School",
                "duration" => "2011 - 2013",
                "score" => "72.00%",
            ],
            [
                "name" => "High School",
                "institute" => "St. Ann's High School",
                "duration" => "2010 - 2011",
                "score" => "81.00%",
            ]
        ];

        foreach ($degrees as $degree) {
            $student->degrees[] = new Degree(
                $degree['name'],
                $degree['institute'],
                $degree['duration'],
                $degree['score']
            );
        }

        $projects = [
            [
                "title" => "Pracly",
                "description" => "Pracly provides on Demand business advice to startups",
                "start" => "Sept, 13",
                "end" => "Feb, 15",
                "team_size" => "5",
            ]
        ];

        foreach ($projects as $project) {
            $student->projects[] = new Project(
                $project['title'],
                $project['description'],
                $project['start'],
                $project['end'],
                $project['team_size']
            );
        }

        $student->awards = [
            "Runner up at HackBaroda",
            "Judge at Hackathon organized by IIT Gandhinagar"
        ];

        $student->hobbies = [
            "Playing Soccer",
            "Contributing to Open Source",
            "Organizing and Attending Hackathons"
        ];

        $view = view('template', compact('student'));

        $html = $view->render();
        $pdf->loadHTML($html);
        return $pdf->stream("resume.pdf");
    }

}
