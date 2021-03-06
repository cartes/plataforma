<div class="col-2">
    @auth
        @can("opt_for_course", $course)
            @can("subscribe", \App\Course::class)
                <a href="{{route("subscriptions.plans")}}" class="btn btn-subscribe btn-bottom btn-block">
                    <i class="fa fa-bolt"></i> {{__("Suscríbeme")}}
                </a>
            @else
                @can("inscribe")
                    <a href="#" class="btn btn-subscribe btn-bottom btn-block">
                        <i class="fa fa-bolt"></i> {{__("Inscribirme")}}
                    </a>
                @else
                    <a href="#" class="btn btn-subscribe btn-bottom btn-block">
                        <i class="fa fa-bolt"></i> {{__("Inscrito")}}
                    </a>
                @endcan
            @endcan
        @else
            <a href="#" class="btn btn-subscribe btn-bottom btn-block">
                <i class="fa fa-user"></i> {{__("Soy el autor")}}
            </a>
        @endcan
    @else
        <a href="{{route('login')}}" class="btn btn-subscribe btn-bottom btn-block">
            <i class="fa fa-user"></i> {{__("Acceder")}}
        </a>
    @endauth
</div>