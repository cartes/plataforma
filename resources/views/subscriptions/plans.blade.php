@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/pricing.css') }}">
@endpush

@section('jumbotron')
    @include('partials.jumbotrom', [
        'title' => __("Subscríbete ahora a uno de nuestros planes"),
        'icon' => 'globe-americas'
    ])
@endsection

@section('content')
    <div class="container">
        <div class="pricing-table pricing-three-column row">
            <div class="plan col-sm-4 col-lg-4">
                <div class="plan-name-bronze">
                    <h2>{{ __("MENSUAL") }}</h2>
                    <span>{{ __(":price / Mes", ['price' => 'US$ 11.99']) }}</span>
                </div>
                <ul>
                    <li class="plan-feature">{{ __("Acceso a todos los cursos") }}</li>
                    <li class="plan-feature">{{ __("Acceso a todos los archivos") }}</li>
                    <li class="plan-feature">
                        @include("partials.stripe.form", [
                            "product" => [
                                "name" => __("Suscripción"),
                                "description" => __("Mensual"),
                                "type" => "monthly",
                                "amount" => 1199,99
                            ]
                        ])
                    </li>
                </ul>
            </div>

            <div class="plan col-sm-4 col-lg-4">
                <div class="plan-name-silver">
                    <h2>{{ __("SEMESTRAL") }}</h2>
                    <span>{{ __(":price / Mes", ['price' => 'US$ 69.99']) }}</span>
                </div>
                <ul>
                    <li class="plan-feature">{{ __("Acceso a todos los cursos") }}</li>
                    <li class="plan-feature">{{ __("Acceso a todos los archivos") }}</li>
                    <li class="plan-feature">
                        @include("partials.stripe.form", [
                            "product" => [
                                "name" => __("Suscripción"),
                                "description" => __("Semestral"),
                                "type" => "biannual",
                                "amount" => 6999,99
                            ]
                        ])
                    </li>
                </ul>
            </div>

            <div class="plan col-sm-4 col-lg-4">
                <div class="plan-name-gold">
                    <h2>{{ __("ANUAL") }}</h2>
                    <span>{{ __(":price / Mes", ['price' => 'US$ 109.99']) }}</span>
                </div>
                <ul>
                    <li class="plan-feature">{{ __("Acceso a todos los cursos") }}</li>
                    <li class="plan-feature">{{ __("Acceso a todos los archivos") }}</li>
                    <li class="plan-feature">
                        @include("partials.stripe.form", [
                            "product" => [
                                "name" => __("Suscripción"),
                                "description" => __("Semestral"),
                                "type" => "biannual",
                                "amount" => 10999,99
                            ]
                        ])
                    </li>
                </ul>
            </div>

        </div>
    </div>
@endsection