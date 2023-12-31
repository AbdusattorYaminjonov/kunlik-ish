@extends('layout')
@section('title', 'Home')
@section('content')
    <div class="mt-3">
        <div class="d-flex justify-content-around">
            <form action="{{ route('search') }}" method="POST" class="d-flex " role="search">
                @csrf
                <select style="width: 300px;  " id="inputState" class="form-select   chosen-select" name="job">
                    <option selected disabled>Which job</option>
                    @foreach ($jobs as $job)
                        <option value="{{ $job->id }}">{{ $job->name }}</option>
                    @endforeach
                </select>
                <select style="width: 300px;" name="place" id="inputState"
                    class="form-select border border-primary chosen-select">
                    <option selected disabled>Which district</option>
                    @foreach ($v as $viloyat)
                        <optgroup label="{{ $viloyat->name_uz }}">
                            @foreach ($viloyat->tumanlari as $tuman)
                                <option value="{{ $tuman->id }}">{{ $tuman->name_uz }}</option>
                            @endforeach
                        </optgroup>
                    @endforeach
                </select>
                <button class="btn btn-primary" type="submit">
                    <img style="width: 20px !important" src="{{ asset('icons/search.ico') }}">
                </button>
            </form>
        </div>
    </div>
    <div class="container mt-5 pt-4">
        <div class="row align-items-end mb-4 pb-2">
            <div class="col-md-8">
                <div class="section-title text-center text-md-start">
                    <h4 class="title mb-4">Find the perfect jobs</h4>
                    <p class="text-muted mb-0 para-desc">Start work with Leaping. Build responsive, mobile-first projects on
                        the web with the world's most popular front-end component library.</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->
        {{-- <div class="grid text-center" style="--bs-columns: 3;"> --}}
        <div class="row">
            @foreach ($works as $work)
                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="card border-0 bg-light rounded shadow">
                        <div class="card-body p-4">
                            <div style="height: 60px">
                                <h5>{{ $work->title }}</h5>
                            </div>
                            <div class="mt-3">
                                <h3 style="color: rgb(72, 135, 21)"><i class="fa-solid fa-sack-dollar"
                                        style="margin-right: 3px"></i>{{ $work->price }} so'm</h3>
                                <h5><i class="fa-solid fa-calendar-days" style="margin-right: 3px"></i>{{ $work->date }}</h5>
                                <hr>
                                <span class="text-muted d-block">
                                    <i class="fa-solid fa-location-dot"></i>
                                    {{ $work->tuman->name_uz }}</span>
                            </div>
                            <div class="mt-3 d-flex " style="justify-content: flex-end;">
                                <button class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal_{{ $work->id }}">
                                    To'liq ko'rish
                                </button>
                            </div>
                            <div class="mt-3 d-flex">
                                <p>created in :</p>
                                <label style="margin-left: 5px">{{ $work->created_at->format('Y-m-d') }}</label>
                            </div>
                            <div class="mt-3 d-flex">
                                <p>
                                    <i class="fa-solid fa-user" style="font-size: 15px !important; color:#797979"></i>
                                </p>
                                <p style="color: #797979;margin-left: 3px;">: 4</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="exampleModal_{{ $work->id }}" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">
                                    {{ $work->title }}</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <h6>{!! $work->description !!}</h6>
                                <hr>
                                <div class="d-flex mt-2">
                                    <img style="width: 25px; margin-right: 5px" src="{{ asset('icons/user.ico') }}"
                                        alt="">
                                    <a href="{{ route('showUser', ['user' => $work->user->id]) }}" class="link-underline-light">{{ $work->user->name }} :
                                        owner</a>
                                </div>
                                <hr>
                                <div class="d-flex mt-2">
                                    <img style="width: 25px; margin-right: 5px" src="{{ asset('icons/kalendar.ico') }}"
                                        alt="">
                                    <h6>{{ $work->date }}</h6>
                                </div>
                                <div class="d-flex mt-2">
                                    <img style="width: 25px; margin-right: 5px" src="{{ asset('icons/kasb.ico') }}"
                                        alt="">
                                    <h6>{{ $work->jobrel->name }}</h6>
                                </div>
                                <div class="d-flex mt-2">
                                    <img style="width: 25px; margin-right: 5px" src="{{ asset('icons/tuman.ico') }}"
                                        alt="">
                                    <h6>{{ $work->tuman->name_uz }}</h6>
                                </div>
                                <div class="d-flex text-center mt-2">
                                    <img style="width: 25px; margin-right: 5px" src="{{ asset('icons/users.ico') }}"
                                        alt="">
                                    <h6>{{ $work->workers }} ta odam
                                    </h6>
                                </div>
                                <div class="d-flex text-center mt-2">
                                    <img style="width: 25px; margin-right: 5px"
                                        src="{{ asset('icons/workers_price.ico') }}" alt="">
                                    <h6>{{ $work->price }} so'm</h6>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" data-bs-dismiss="modal">Yopish</button>
                                <form action="" method="">
                                    <button class="btn btn-primary">Qo'shilish</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div>
            {{ $works->links() }}
        </div>
    </div>
    <style>
        .chosen-container-single .chosen-single div b {
            display: block !important;
            opacity: 0 !important;
        }

        .chosen-container-single .chosen-single {
            background-color: white !important;
            border-color: blue !important;
            margin-right: 15px;
            height: 10px !important;
        }
    </style>

@endsection

@section('myJs')
    <link rel="stylesheet" href="{{ asset('chosen_v1.8.7/chosen.css') }}">
    <link rel="stylesheet" href="{{ asset('mystyle.css') }}">
    <script src="{{ asset('chosen_v1.8.7/chosen.jquery.js') }}"></script>
    <script>
        $(".chosen-select").chosen({
            disable_search_threshold: 10
        });
    </script>
@endsection
