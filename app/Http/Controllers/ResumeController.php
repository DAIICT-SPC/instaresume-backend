<?php
namespace InstaResume\Http\Controllers;

use InstaResume\Degree;
use InstaResume\Http\Requests\GenerateRequest;
use InstaResume\Internship;
use InstaResume\Project;
use InstaResume\Student;

class ResumeController extends Controller
{

    public function generate(GenerateRequest $request)
    {
        $pdf = app('dompdf.wrapper');

        $data = $request->only('user_id', 'resume');
        $resume = $data['resume'];
        $user_id = $data['user_id'];

        $name = $resume['info']['name'];
        $email = $resume['info']['email'];
        $address = $resume['info']['address'];
        $dob = $resume['info']['dob'];
        $expertise = $resume['skill']['expertise'];
        $programming_languages = $resume['skill']['programming_languages'];
        $tools = $resume['skill']['tools'];

        $student = new Student(
            $name,
            $email,
            $dob,
            $address,
            $expertise,
            $programming_languages,
            $tools
        );

        $degrees = $resume['degrees'];

        $student->degrees = $this->getDegrees($degrees);

        $internships = $resume['internships'];

        $student->internships = $this->getInternships($internships);

        $projects = $resume['projects'];

        $student->projects = $this->getProjects($projects);

        $student->awards = $resume['awards'];

        $student->hobbies = $resume['hobbies'];

        $student->positions= $resume['positions'];

        $pdf->loadView('template', compact('student'));

        $filename = "uploads/resumes/" . $user_id . ".pdf";

        $pdf->save($filename);

        return response()->json(['url' => url($filename)]);
    }

    protected function getDegrees($degrees)
    {
        $studentDegrees = [];

        if (count($degrees) > 0) {

            foreach ($degrees as $degree) {
                $studentDegrees[] = new Degree(
                    $degree['name'],
                    $degree['institute'],
                    $degree['year'],
                    $degree['score']
                );
            }
        }

        return $studentDegrees;
    }

    protected function getProjects($projects)
    {
        $studentProjects = [];

        if (count($projects) > 0) {
            foreach ($projects as $project) {
                $studentProjects[] = new Project(
                    $project['name'],
                    $project['description'],
                    $project['start'],
                    $project['end'],
                    $project['team_size'],
                    $project['guide']
                );
            }
        }

        return $studentProjects;
    }

    protected function getInternships($internships)
    {
        $studentInternships = [];

        if (count($internships) > 0) {
            foreach ($internships as $internship) {
                $studentInternships[] = new Internship(
                    $internship['name'],
                    $internship['description'],
                    $internship['start'],
                    $internship['end'],
                    $internship['team_size'],
                    $internship['guide']
                );
            }
        }

        return $studentInternships;
    }

}
