@extends('layouts.app')

@section('content')

<!-- Signup-->
        <section class="signup-section" id="signup">
        <div class="row gx-0 mb-5 mb-lg-0 justify-content-center" style="padding:10px; size:200%">
             <div class="project-text w-100 my-auto text-center text-lg-left">
                  <h1 class="text-white">{{$project->project_title}}</h1>
                  <h6 class="text-white">{{$project->created_at}}</h6>
                  <p class="mb-0 text-white-50" style="padding: 10px; font-size:150%">{{$project->project_text}}</p>
                </div>
        </div>
        </section>
       
@endsection