@extends('layout')

@section('navigation')
    <div class="container-fluid navigation-container">
        <div class="container navigation">
            <a href="{{ url('/') }}">Home</a>
        </div>
    </div>
@stop


@section('content')
    <div class="container">
        <div class="row">
            <div class="main-container">
                <div style="text-align: center">
                    <img src="{{ asset('images/wbpdcleea_logo.png') }}" height="150" alt="logo">
                </div>
                <h3 class="heading">Welcome to WBPDCLEEA</h3>
                <div class="main-content">
                    <hr>
                    <p>
                        West Bengal Power Development Corporation Ltd. Energy Engineers' (Welfare) Association is the
                        largest platform for the engineers serving at various units of WBPDCL with a goal to safeguard
                        the interests and welfare of the engineer community. It is also a common place to study,
                        discuss, analyze and exchange of views on various problems of technical and administrative
                        nature.
                    </p>
                    <br>
                    <h4>Our Mission</h4>
                    <p>To produce quality electricity in compliance with regulatory requirements in the most
                        consistent & efficient manner, remained committed to the environment and to be a leading
                        provider of technical supports and related services of the highest quality and standards of
                        excellence to meet the demands of business, industry and the community and thereby to contribute
                        to India's socioeconomic progress.
                    </p>
                    <br>
                    <h4>Core Values</h4>
                    <ul>
                        <li>To safeguard the interest and welfare of the members of the association</li>
                        <li>To advance and promote the cause of the WBPDCL</li>
                        <li>To study, discuss & analyze the policies and developments of the national and state power
                            sector
                        </li>
                        <li>To develop and maintain close social and professional relationship, co-operation and
                            understanding amongst the members of the association
                        </li>
                        <li>Eradication of contraction or misunderstanding amongst the members, if any, irrespective of
                            official rank or status
                        </li>
                        <li>To collect all information, on matters affecting the members, makes representations to the
                            various authorities, and to appear before any authority in the interest and betterment of
                            the members and the employer organization.
                        </li>
                        <li>To obtain, by all and every constitutional means including legal recourse, redressal of all
                            legitimate grievances of the members of the association.
                        </li>
                        <li>To maintain, in general, fraternal relation with other association & unions of the WBPDCL
                            and other similar organizations.
                        </li>
                        <li>To take initiatives in technological development, publish technical newsletters, journals
                            etc. and organize seminars etc. to promote sharing of knowledge and experiences for
                            technological up-gradation of the members and the WBPDCL.
                        </li>
                        <li>To collect subscription & donation and thereby secure and maintain funds for association
                            activities.
                        </li>
                        <li>To observe relevant auspicious Day (like Engineers’, science, environment, safety etc.) and
                            institutionalize social welfare activities.
                        </li>
                        <li>To constitute Zones & thereby zonal committees at various establishments of the WBPDCL to
                            facilitate decentralize functioning to take care of Zonal issues.
                        </li>
                        <li>To do and perform such other acts, things as are conductive to</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

@stop