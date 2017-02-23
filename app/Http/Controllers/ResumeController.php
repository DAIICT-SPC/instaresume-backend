<?php
namespace InstaResume\Http\Controllers;

use Illuminate\Http\Request;
use InstaResume\Degree;
use InstaResume\Http\Requests\GenerateRequest;
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

        foreach ($degrees as $degree) {
            $student->degrees[] = new Degree(
                $degree['name'],
                $degree['institute'],
                $degree['year'],
                $degree['score']
            );
        }

        $projects = $resume['projects'];

        foreach ($projects as $project) {
            $student->projects[] = new Project(
                $project['name'],
                $project['description'],
                $project['start'],
                $project['end'],
                $project['team_size']
            );
        }

        $student->awards = $resume['awards'];

        $student->hobbies = $resume['hobbies'];

        $pdf->loadView('template', compact('student'));

        $filename = "uploads/resumes/" . $user_id . ".pdf";

        $pdf->save($filename);

        return response()->json(['url' => url($filename)]);
    }

}
