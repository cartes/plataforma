<div class="card card-01">
    <img class="card-img-top" src="{{$course->pathAttachment()}}" alt="{{$course->name}}">

    <div class="card-body">
        <span class="badge-box"><i class="fa fa-check"></i></span>
        <h4 class="card-title">{{ $course->name }}</h4>
        <hr />
        <div class="row justify-content-center">
            {{-- Partial para el rating --}}
        </div>
        <hr />
        <span class="badge badge-danger badge-cat">{{ $course->category->name }}</span>
    </div>

</div>