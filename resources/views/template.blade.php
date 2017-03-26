<!DOCTYPE html>
<head>
    <title>Resume - {{$student->name}}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" href="{{url('css/style.css')}}">
</head>

<body>

<div class="wrapper">
    <table class="main">
        <tr>
            <td class="w-20">
                <img src="{{url('images/daiict-logo.jpg')}}">
            </td>

            <td class="intro w-80">
                <h1>{{$student->name}}</h1>
                <p>
                    <b>Dhirubhai Ambani Institute of Information and Communication Technology</b>
                </p>
                <p>
                    <span class="w-60 inline-block">
                        <b>Email:</b> {{$student->email}}
                    </span>
                    <span class="w-40 text-right">
                        <b>DOB:</b> {{$student->dob}}
                    </span>
                </p>
                <p>
                    <b>Address:</b> {{$student->address}}
                </p>
            </td>

        </tr>

    </table>

    <table class="w-100 section">
        <tr>
            <td colspan="4" class="section-header">
                <h3>EDUCATION</h3>
            </td>
        </tr>
        <tr>
            <th colspan="1">Degree</th>
            <th colspan="1">University/Institute</th>
            <th colspan="1">Year</th>
            <th colspan="1">CPI/Aggregate</th>
        </tr>
        @foreach($student->degrees as $degree)
            <tr>
                <td>
                    <b>{{$degree->name}}</b>
                </td>
                <td>
                    {{$degree->institute}}
                </td>
                <td>
                    {{$degree->duration}}
                </td>
                <td>
                    {{$degree->score}}
                </td>
            </tr>
        @endforeach
    </table>

    <table class="w-100 section">
        <tr>
            <td colspan="2" class="section-header">
                <h3>SKILLS</h3>
            </td>
        </tr>
        <tr>
            <td class="w-30">
                <b>Expertise Area/Area(s) of
                    Interest</b>
            </td>
            <td class="w-70">
                {{$student->expertise}}
            </td>
        </tr>
        <tr>
            <td class="w-30">
                <b>Programming Language(s)</b>
            </td>
            <td class="w-70">
                {{$student->programming_languages}}
            </td>
        </tr>
        <tr>
            <td class="w-30">
                <b>Tools and
                    Technologies</b>
            </td>
            <td class="w-70">
                {{$student->tools}}
            </td>
        </tr>
        <tr>
            <td class="w-30">
                <b>Technical Elective(s)</b>
            </td>
            <td class="w-70">
                {{$student->technical_electives}}
            </td>
        </tr>
    </table>

    <div class="page-break"></div>

    @if(count($student->internships))
        <table class="w-100 section">
            <tr>
                <td colspan="2" class="section-header">
                    <h3>PROFESSIONAL EXPERIENCE/INTERNSHIPS</h3>
                </td>
            </tr>
            @foreach($student->internships as $internship)
                <tr>
                    <td class="w-80" valign="top">
                        <p>
                            <b>{{$internship->name}}</b>
                        </p>
                        <p>
                            {{$internship->description}}
                            @if($internship->guide)
                                <br>
                                <i>
                                    Guide: {{$internship->guide}}
                                </i>
                            @endif
                        </p>
                    </td>
                    <td class="w-20" valign="top">
                        <p>({{$internship->start}} - {{$internship->end}})</p>
                        @if($internship->team_size)
                            <p>Team Size - {{$internship->team_size}}</p>
                        @endif
                    </td>
                </tr>
            @endforeach
        </table>
    @endif

    @if(count($student->projects))
        <table class="w-100 section">
            <tr>
                <td colspan="2" class="section-header">
                    <h3>PROJECTS</h3>
                </td>
            </tr>
            @foreach($student->projects as $project)
                <tr>
                    <td class="w-80" valign="top">
                        <p>
                            <b>{{$project->name}}</b>
                        </p>
                        <p>
                            {{$project->description}}
                            @if($project->guide)
                                <br>
                                <i>Guide: {{$project->guide}}</i>
                            @endif
                        </p>
                    </td>
                    <td class="w-20" valign="top">
                        <p>({{$project->start}} - {{$project->end}})</p>
                        @if($project->team_size)
                            <p>Team Size - {{$project->team_size}}</p>
                        @endif
                    </td>
                </tr>
            @endforeach
        </table>
    @endif

    <div class="page-break"></div>

    @if(count($student->positions))
        <table class="w-100 section">
            <tr>
                <td colspan="2" class="section-header">
                    <h3>POSITION OF RESPONSIBILITY</h3>
                </td>
            </tr>
            <tr>
                <td valign="top">
                    <ul class="list">
                        @foreach($student->positions as $position)
                            <li>
                                {{$position['name']}}
                            </li>
                        @endforeach
                    </ul>
                </td>
            </tr>
        </table>
    @endif

    @if(count($student->awards))
        <table class="w-100 section">
            <tr>
                <td colspan="2" class="section-header">
                    <h3>AWARDS AND ACHIEVEMENTS</h3>
                </td>
            </tr>
            <tr>
                <td valign="top">
                    <ul class="list">
                        @foreach($student->awards as $award)
                            <li>
                                {{$award['name']}}
                            </li>
                        @endforeach
                    </ul>
                </td>
            </tr>
        </table>
    @endif

    @if(count($student->hobbies))
        <table class="w-100 section">
            <tr>
                <td colspan="2" class="section-header">
                    <h3>INTERESTS AND HOBBIES</h3>
                </td>
            </tr>
            <tr>
                <td valign="top">
                    <ul class="list">
                        @foreach($student->hobbies as $hobby)
                            <li>
                                {{$hobby['name']}}
                            </li>
                        @endforeach
                    </ul>
                </td>
            </tr>
        </table>
    @endif

</div>

</body>

</html>
