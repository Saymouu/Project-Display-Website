@extends('layouts.app')

@section('content')

<!-- Projects-->
<section class="signup-section" id="projects">
    <div class="container px-4 px-lg-5">
        <!-- Featured Project Row-->
        <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
            <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="assets/img/bg-masthead.jpg" alt="..." /></div>
            <div class="col-xl-4 col-lg-5">
                <div class="featured-text text-center text-lg-left">
                    <h1>Categories:</h1>
                    <ul class="navbar-nav ms-auto">
                        @foreach ($Categories as $category)
                        <li class="list-item"><a href="{{ route('projects') }}?category_id= {{$category->id}}">{{$category->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <h1 style="size: 150%; text-align: center; padding:10px">Projects:</h1>
        <!-- Project Row-->
        @foreach ($Projects as $project)
        <div class="row gx-0 mb-5 mb-lg-0 justify-content-center" style="padding:10px">
            <div class="col-lg-6"><img class="img-fluid" src="assets/img/demo-image-01.jpg" alt="..."></div>
            <div class="col-lg-6">
                <div class="bg-black text-center h-100 project">
                    <div class="d-flex h-100">
                        <div class="project-text w-100 my-auto text-center text-lg-left">
                            <h3 class="text-white"><a href="{{route('project.show', $project->id)}}">{{$project->project_title}}</a></h3>
                            <h6 class="text-white">{{$project->created_at}}</h6>
                            {{-- <p class="mb-0 text-white-50" style="padding: 10px">{{$project->project_text}}</p> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
</section>

@endsection