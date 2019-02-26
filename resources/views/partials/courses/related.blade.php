<div class="col-12 mt-4 pt-0">
    <h2 class="text-muted">
        {{__("Cursos relacionados")}}
    </h2>
    <hr/>
    <div class="container-fluid">
        <div class="row">
            @forelse($related as $relatedCourse)
                <div class="col-md-6 listing-block">
                    <div class="media">
                        <div class="fav-box">
                            <i class="fa fa-heart-o" aria-hidden="true"></i>
                        </div>
                        <a href="{{ route('courses.detail', $relatedCourse->slug) }}">
                            <img
                                    class="d-flex align-self-start"
                                    src="/images/courses/{{$relatedCourse->picture}}"
                                    alt="{{$relatedCourse->name}}"
                            />
                        </a>
                        <div class="media-body pl-3">
                            <div class="price">
                                <a href="{{ route('courses.detail', $relatedCourse->slug) }}">
                                    <small>{{$relatedCourse->name}}</small>
                                </a>
                            </div>
                            <div class="stats">
                                @include("partials.courses.rating", ["course" => $relatedCourse])
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="alert-dark alert">
                    {{__("No existen cursos relacionados")}}
                </div>
            @endforelse
        </div>
    </div>
</div>