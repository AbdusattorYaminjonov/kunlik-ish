@extends('layout')
@section('content')
    <div class="container">
        <div class="main-body">

            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb" class="main-breadcrumb">
                <div class="d-flex justify-content-center" style="padding: 60px;">
                    <form>
                        <div class="input-group searchGrup">
                            <input type="text" class="form-control" style="width: 400px !important; "
                                placeholder="Ishchilar">
                            <div class="input-group-btn ">
                                <button class="btn btn-primary btn-sm" type="submit">
                                    <i class="fa-solid fa-magnifying-glass" style="color: #ffffff;"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </nav>
            <!-- /Breadcrumb -->

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 gutters-sm">
                @foreach ($users as $user)
                    @if (auth()->id() == $user->id)
                        @continue;
                    @endif
                    <div class="col mb-3">
                        <div class="card">
                            <div class="colorB">

                                <h5 style="color: #ffffff" class="card-title">{{ $user->name }} {{ $user->surname }}</h5>

                            </div>
                            <div class="card-body text-center">
                                <p class="text-secondary mb-1">Full Stack Developer</p>
                                <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p>
                                <p>{{ $user->phonenumber }}</p>
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-light btn-sm bg-white has-icon btn-block" type="button"><i
                                        class="material-icons">add</i>Follow</button>
                                <button class="btn btn-light btn-sm bg-white has-icon ml-2" type="button"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-message-circle">
                                        <path
                                            d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z">
                                        </path>
                                    </svg></button>
                                @foreach ($user->jobs as $job)
                                    <p>{{ $job->name }}</p>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <style>
        .card {
            height: 300px;
        }

        .card-footer {
            height: 110px;
        }

        .colorB {
            height: 40px;
        }
    </style>
@endsection
