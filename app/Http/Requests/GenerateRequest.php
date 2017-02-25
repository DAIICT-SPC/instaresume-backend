<?php
namespace InstaResume\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GenerateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'user_id' => "required",
            'resume' => "required",
            'resume.info.name' => "required",
            'resume.info.email' => "required|email",
            'resume.info.address' => "required",
            'resume.info.dob' => "required",
            'resume.skill.expertise' => "required",
            'resume.skill.programming_languages' => "required",
            'resume.skill.tools' => "required",
            'resume.degrees.*.name' => "required",
            'resume.degrees.*.institute' => "required",
            'resume.degrees.*.year' => "required",
            'resume.degrees.*.score' => "",
            'resume.projects.*.name' => "required",
            'resume.projects.*.description' => "required",
            'resume.projects.*.start' => "required",
            'resume.projects.*.end' => "",
            'resume.projects.*.team_size' => ""
        ];
    }
}
