@extends('layout')
@section('content')
    <div class="bg-primary text-center pt-3 d-flex justify-content-center">
        <div class="rating-box">
            <div>
                <h3>{{ auth()->user()->name }} {{ auth()->user()->surname }}</h3>
            </div>
            <div>
                <label>Hello!</label>
            </div>
            <div class="stars">
                @if (auth()->user()->users_ball_count == 0)
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                @elseif(auth()->user()->users_ball_count == 1)
                    <i class="fa-solid fa-star faol"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                @elseif(auth()->user()->users_ball_count == 2)
                    <i class="fa-solid fa-star faol"></i>
                    <i class="fa-solid fa-star faol"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                @elseif(auth()->user()->users_ball_count == 3)
                    <i class="fa-solid fa-star faol"></i>
                    <i class="fa-solid fa-star faol"></i>
                    <i class="fa-solid fa-star faol"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                @elseif(auth()->user()->users_ball_count == 4)
                    <i class="fa-solid fa-star faol"></i>
                    <i class="fa-solid fa-star faol"></i>
                    <i class="fa-solid fa-star faol"></i>
                    <i class="fa-solid fa-star faol"></i>
                    <i class="fa-solid fa-star"></i>
                @elseif(auth()->user()->users_ball_count == 5)
                    <i class="fa-solid fa-star faol"></i>
                    <i class="fa-solid fa-star faol"></i>
                    <i class="fa-solid fa-star faol"></i>
                    <i class="fa-solid fa-star faol"></i>
                    <i class="fa-solid fa-star faol"></i>
                @endif
            </div>
            <label>{{ auth()->user()->users_ball_count }} score</label>
        </div>
    </div>

    <div class="container pt-5 " style="min-height: 416px;">
        <div class="row gutters-sm">
            <div class="col-md-4 d-none d-md-block" style="width: 300px">
                <div class="card">
                    <div class="card-body">
                        <nav class="nav flex-column nav-pills nav-gap-y-1">
                            <a href="#profile" data-toggle="tab" class="nav-item nav-link has-icon nav-link-faded">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-user mr-2">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg>Profile Information
                            </a>
                            <a href="#billing" data-toggle="tab" class="nav-item nav-link has-icon nav-link-faded">
                                <img style="width: 25px !important" src="{{ asset('icons/work_post.ico') }}">Posts
                            </a>
                            <a href="#account" data-toggle="tab" class="nav-item nav-link has-icon nav-link-faded">
                                <img style="width: 25px !important" src="{{ asset('icons/plus_work.ico') }}">Add post
                            </a>
                            <a href="#security" data-toggle="tab" class="nav-item nav-link has-icon nav-link-faded">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-shield mr-2">
                                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                                </svg>Security
                            </a>
                            <a href="#notification" data-toggle="tab" class="nav-item nav-link has-icon nav-link-faded  ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="position-relative feather feather-bell mr-2">
                                    <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                    <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                                </svg>
                                <label class="position-relative">

                                    Notification
                                    <span
                                        class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                        99+
                                        <span class="visually-hidden">unread messages</span>
                                    </span>
                                </label>
                            </a>

                        </nav>
                    </div>
                </div>
            </div>
            <div class="col-md-8" style="width: 900px">
                <div class="card">
                    <div class="card-header border-bottom mb-3 d-flex d-md-none">
                        <ul class="nav nav-tabs card-header-tabs nav-gap-x-1" role="tablist">
                            <li class="nav-item">
                                <a href="#profile" data-toggle="tab" class="nav-link has-icon active"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg></a>
                            </li>
                            <li class="nav-item">
                                <a href="#account" data-toggle="tab" class="nav-link has-icon"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings">
                                        <circle cx="12" cy="12" r="3"></circle>
                                        <path
                                            d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                                        </path>
                                    </svg></a>
                            </li>
                            <li class="nav-item">
                                <a href="#security" data-toggle="tab" class="nav-link has-icon"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-shield">
                                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                                    </svg></a>
                            </li>
                            <li class="nav-item">
                                <a href="#notification" data-toggle="tab" class="nav-link has-icon"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell">
                                        <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                        <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                                    </svg></a>
                            </li>
                            <li class="nav-item">
                                <a href="#billing" data-toggle="tab" class="nav-link has-icon"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-credit-card">
                                        <rect x="1" y="4" width="22" height="16" rx="2" ry="2">
                                        </rect>
                                        <line x1="1" y1="10" x2="23" y2="10"></line>
                                    </svg></a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body card-uzunligi tab-content">
                        <div class="tab-pane active" id="profile">
                            <h4>{{ auth()->user()->name }} {{ auth()->user()->surname }}</h4>
                            <hr>
                            <form action="{{ route('edit_user') }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="name">Name and username</label>
                                    <input type="text" name="name" class="form-control" id="name"
                                        aria-describedby="fullNameHelp" placeholder="Enter your name"
                                        value="{{ auth()->user()->name }}">
                                </div>
                                <div class="form-group mt-3">
                                    <label for="surname">Surname</label>
                                    <input type="text" name="surname" class="form-control" id="surname"
                                        aria-describedby="fullNameHelp" placeholder="Enter your sername"
                                        value="{{ auth()->user()->surname }}">
                                </div>
                                <div class="form-group mt-3">
                                    <label for="email">Your email</label>
                                    <input type="email" name="email" class="form-control" id="email"
                                        aria-describedby="fullNameHelp" placeholder="Enter your email"
                                        value="{{ auth()->user()->email }}">
                                </div>
                                <div class="form-group mt-3">
                                    <label for="phonenumber">Phone number</label>
                                    <input type="text" name="phonenumber" class="form-control" id="phonenumber"
                                        aria-describedby="fullNameHelp" placeholder="+998901234567"
                                        value="{{ auth()->user()->phonenumber }}">
                                </div>
                                <div class="form-group mt-3">
                                    <label for="age">Age</label>
                                    <input type="number" name="age" class="form-control" id="age"
                                        placeholder="Enter your website age" value="{{ auth()->user()->age }}">
                                </div>
                                <div class="form-group mt-3">
                                    <label>Location</label>
                                    <select id="inputState" class="form-select border border-primary chosen-select"
                                        style="border-color: #97a7c0 !important;" name="place">
                                        @foreach ($v as $viloyat)
                                            <optgroup label="{{ $viloyat->name_uz }}">
                                                {{-- <option value="{{ auth()->user()->place }}">
                                                    {{ auth()->user()->load('tuman')->tuman->name_uz }}</option> --}}
                                                @foreach ($viloyat->tumanlari as $tuman)
                                                    <option value="{{ $tuman->id }}"
                                                        {{ auth()->user()->place == $tuman->id ? 'selected' : '' }}>
                                                        {{ $tuman->name_uz }}
                                                    </option>
                                                @endforeach
                                            </optgroup>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group small text-muted mt-3">
                                    Change all data
                                </div>
                                <button class="btn btn-primary">Update Profile</button>
                            </form>
                            <hr>
                            <h4>Kasb qo'shish</h4>
                            <form action="{{ route('user.jobs.add') }}" method="POST">
                                @csrf
                                <select class="form-select" style="width: 150px" name="name">
                                    @foreach ($jobs as $job)
                                        <option value="{{ $job->id }}">{{ $job->name }}</option>
                                    @endforeach
                                </select>
                                <button class="btn btn-info mt-3">Add Job</button>
                            </form>
                            <div class="form-group mb-0 p-2 ">
                                <label class="d-block">Kasblarim</label>
                                <div class="container text-center ">
                                    @foreach (Auth::user()->load('jobs')->jobs as $job)
                                        <div class="row justify-content-start">
                                            <div class="col-4" style="width: 240px">
                                                <h5 class="mt-2">{{ $job['name'] }}</h5>
                                            </div>
                                            <div class="col-4" style="width: 50px">
                                                <form action="{{ route('user.delete.job', ['job' => $job->id]) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-link">
                                                        <img style="width: 20px !important"
                                                            src="{{ asset('icons/trash.ico') }}">
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="account">
                            <h6>Create Work</h6>
                            <hr>
                            <form action="{{ route('user.work.create') }}" method="POST">
                                @csrf
                                <div style="margin-bottom: 100px">
                                    <div>
                                        <div>
                                            <div class="d-flex">
                                                <label>Sarlavha </label>
                                                <p style="color: red">* Muxim</p>
                                            </div>
                                            <div class="col-sm-10 input-group" style="width: 415px">
                                                <span class="input-group-text">
                                                    <img style="width: 20px !important"
                                                        src="{{ asset('icons/title.ico') }}">
                                                </span>
                                                <input style="border-color: #97a7c0" type="text" id="icon"
                                                    class="form-control" name="title">
                                                @if ($errors->has('title'))
                                                    <div class="error">{{ $errors->first('title') }}</div>
                                                @endif
                                            </div>
                                            <div class="d-flex mt-3">
                                                <label>Manzil </label>
                                                <p style="color: red">* Muxim</p>
                                            </div>
                                            <div class="col-sm-10 input-group " style="width: 415px">
                                                <span class="input-group-text">
                                                    <img style="width: 20px !important"
                                                        src="{{ asset('icons/location.ico') }}">
                                                </span>
                                                <select id="inputState"
                                                    class="form-select border border-primary chosen-select"
                                                    style="border-color: #97a7c0 !important;" name="place">
                                                    @foreach ($v as $viloyat)
                                                        <optgroup label="{{ $viloyat->name_uz }}">
                                                            @foreach ($viloyat->tumanlari as $tuman)
                                                                <option value="{{ $tuman->id }}">{{ $tuman->name_uz }}
                                                                </option>
                                                            @endforeach
                                                        </optgroup>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <div>
                                                <div class="d-flex mt-3">
                                                    <label>Ishchilar soni </label>
                                                    <p style="color: red">* Muxim</p>
                                                </div>
                                                <div class="col-sm-10 input-group" style="width: 200px">
                                                    <span class="input-group-text">
                                                        <img style="width: 25px !important"
                                                            src="{{ asset('icons/workers.ico') }}">
                                                    </span>
                                                    <input style="border-color: #97a7c0" type="number" name="workers"
                                                        class="form-control">
                                                </div>
                                            </div>
                                            <div style="margin-left: 15px">
                                                <div class="d-flex mt-3">
                                                    <label>Ish xaqqi </label>
                                                    <p style="color: red">* Muxim</p>
                                                </div>
                                                <div class="col-sm-10 input-group" style="width: 200px">
                                                    <span class="input-group-text">
                                                        <img style="width: 25px !important"
                                                            src="{{ asset('icons/price.ico') }}">
                                                    </span>
                                                    <input style="border-color: #97a7c0" type="number" name="price"
                                                        class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="d-flex">
                                            <label>To'liq ma'lumot </label>
                                            <p style="color: red">* Muxim</p>
                                        </div>
                                        <div class="col-sm-10 input-group" style="width: 415px;">
                                            <span class="input-group-text">
                                                <img style="width: 20px !important"
                                                    src="{{ asset('icons/description.ico') }}">
                                            </span>
                                            <textarea id="editor" style="border-color: #97a7c0; " class="form-control" name="description"></textarea>
                                        </div>
                                        <div class="d-flex mt-3">
                                            <label>Kasbi </label>
                                            <p style="color: red">* Muxim</p>
                                        </div>
                                        <div class="col-sm-10 input-group " style="width: 415px">
                                            <span class="input-group-text">
                                                <img style="width: 20px !important" src="{{ asset('icons/job.ico') }}">
                                            </span>
                                            <select id="inputState"
                                                class="form-select border border-primary chosen-select"
                                                style="border-color: #97a7c0 !important;" name="job">
                                                @foreach ($jobs as $job)
                                                    <option value="{{ $job->id }}">{{ $job->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="d-flex">
                                            <div>
                                                <div class="d-flex mt-3">
                                                    <label>Ish kuni </label>
                                                    <p style="color: red">* Muxim</p>
                                                </div>
                                                <div class="col-sm-10 input-group" style="width: 200px">
                                                    <span class="input-group-text">
                                                        <img style="width: 25px !important"
                                                            src="{{ asset('icons/calendar.ico') }}">
                                                    </span>
                                                    <input style="border-color: #97a7c0" type="date" name="date"
                                                        class="form-control">
                                                </div>
                                            </div>
                                            <div>
                                                <button class="btn btn-primary sentre1" type="submit">Add</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                        <div class="tab-pane" id="security">
                            <h6>SECURITY SETTINGS</h6>
                            <hr>
                            <form action="{{ route('change_password') }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label class="d-block">Change Password</label>
                                    <input type="text" class="form-control mt-1" placeholder="New password">
                                    <input type="text" class="form-control mt-1" placeholder="Confirm new password"
                                        name="password">
                                </div>
                                <hr>
                                <button type="submit" class="btn btn-info">Change</button>
                            </form>
                        </div>
                        <div class="tab-pane" id="notification">
                            <h6>NOTIFICATION SETTINGS</h6>
                            <hr>
                            <form>
                                <div class="form-group">
                                    <label class="d-block mb-0">Security Alerts</label>
                                    <div class="small text-muted mb-3">Receive security alert notifications via email</div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1"
                                            checked="">
                                        <label class="custom-control-label" for="customCheck1">Email each time a
                                            vulnerability is found</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck2"
                                            checked="">
                                        <label class="custom-control-label" for="customCheck2">Email a digest summary of
                                            vulnerability</label>
                                    </div>
                                </div>
                                <div class="form-group mb-0">
                                    <label class="d-block">SMS Notifications</label>
                                    <ul class="list-group list-group-sm">
                                        <li class="list-group-item has-icon">
                                            Comments
                                            <div class="custom-control custom-control-nolabel custom-switch ml-auto">
                                                <input type="checkbox" class="custom-control-input" id="customSwitch1"
                                                    checked="">
                                                <label class="custom-control-label" for="customSwitch1"></label>
                                            </div>
                                        </li>
                                        <li class="list-group-item has-icon">
                                            Updates From People
                                            <div class="custom-control custom-control-nolabel custom-switch ml-auto">
                                                <input type="checkbox" class="custom-control-input" id="customSwitch2">
                                                <label class="custom-control-label" for="customSwitch2"></label>
                                            </div>
                                        </li>
                                        <li class="list-group-item has-icon">
                                            Reminders
                                            <div class="custom-control custom-control-nolabel custom-switch ml-auto">
                                                <input type="checkbox" class="custom-control-input" id="customSwitch3"
                                                    checked="">
                                                <label class="custom-control-label" for="customSwitch3"></label>
                                            </div>
                                        </li>
                                        <li class="list-group-item has-icon">
                                            Events
                                            <div class="custom-control custom-control-nolabel custom-switch ml-auto">
                                                <input type="checkbox" class="custom-control-input" id="customSwitch4"
                                                    checked="">
                                                <label class="custom-control-label" for="customSwitch4"></label>
                                            </div>
                                        </li>
                                        <li class="list-group-item has-icon">
                                            Pages You Follow
                                            <div class="custom-control custom-control-nolabel custom-switch ml-auto">
                                                <input type="checkbox" class="custom-control-input" id="customSwitch5">
                                                <label class="custom-control-label" for="customSwitch5"></label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane" id="billing">
                            <h3>Ishlar</h3>
                            <hr>
                            <div class="form-group mb-0">
                                <div class="border border-gray-500 bg-gray-200 p-3  font-size-sm">
                                    <div class="overflow-auto row" style="height: 500px">

                                        @foreach ($works as $work)
                                            <div class="col-lg-6 col-md-6 col-12 mt-4">
                                                <div class="card border-0 bg-light rounded shadow " style="width: 350px">
                                                    <div class="card-body p-4">
                                                        <div>
                                                            <h6 style="color: blue">{{ $work->title }}</h6>
                                                            <div style="height: 100px">
                                                                {!! $work->description !!}
                                                            </div>
                                                        </div>
                                                        <div class="mt-2">
                                                            <h5 style="color: rgb(14, 0, 121)">
                                                                {{ $work->tuman->name_uz }}</h5>
                                                            <div class="mt-1 d-flex">
                                                                <label style="margin-right: 3px">Ish kuni:</label>
                                                                <h6>{{ $work->date }}</h6>
                                                            </div>
                                                            <div class="mt-1 d-flex">
                                                                <label style="margin-right: 3px">Kasbi:</label>
                                                                <h6>{{ $work->jobrel->name }}</h6>
                                                            </div>
                                                            <div class="mt-1 d-flex">
                                                                <label style="margin-right: 3px">Odam soni:</label>
                                                                <h6>{{ $work->workers }}</h6>
                                                            </div>
                                                            <hr>
                                                            <h5 style="color: rgb(72, 135, 21)">
                                                                {{ $work->price }} so'm</h5>
                                                        </div>
                                                        <div class="mt-1 d-flex">
                                                            <p>created in :</p>
                                                            <label
                                                                style="margin-left: 5px">{{ $work->created_at->format('Y-m-d') }}</label>
                                                        </div>
                                                        <div class="mt-3">
                                                            <div class="modal-footer">
                                                                <button class="btn btn-primary btn-sm"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#user_{{ $work->id }}"
                                                                    style=" margin: 5px"><img style="width: 25px;"
                                                                        src="{{ asset('icons/users_oq.ico') }}"></button>
                                                                <button class="btn btn-primary btn-sm"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal_{{ $work->id }}"
                                                                    style=" margin: 5px"><img style="width: 25px;"
                                                                        src="{{ asset('icons/edit_oq.ico') }}"></button>
                                                                <form
                                                                    action="{{ route('delete_user_post', ['work' => $work->id]) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button class="btn btn-primary btn-sm"
                                                                        style=" margin: 5px"><img style="width: 25px;"
                                                                            src="{{ asset('icons/trash_oq.ico') }}"></button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="modal fade" id="exampleModal_{{ $work->id }}" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-body">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="exampleModalLabel">
                                                                    Postni
                                                                    o'zgartirish</h1>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>

                                                            <form
                                                                action="{{ route('edit_user_post', ['work' => $work->id]) }}"
                                                                method="POST">
                                                                <div class="d-flex">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <div style="margin: 15px">
                                                                        <div class="d-flex">
                                                                            <label>Sarlavha </label>
                                                                            <p style="color: red">* Muxim</p>
                                                                        </div>
                                                                        <div class="col-sm-10 input-group"
                                                                            style="width: 415px">
                                                                            <span class="input-group-text">
                                                                                <img style="width: 20px !important"
                                                                                    src="{{ asset('icons/title.ico') }}">
                                                                            </span>
                                                                            <input style="border-color: #97a7c0"
                                                                                type="text" id="icon"
                                                                                class="form-control"
                                                                                value="{{ $work->title }}"
                                                                                name="title">
                                                                        </div>
                                                                        <div class="d-flex mt-3">
                                                                            <label>Manzil </label>
                                                                            <p style="color: red">* Muxim</p>
                                                                        </div>
                                                                        <div class="col-sm-10 input-group "
                                                                            style="width: 415px">
                                                                            <span class="input-group-text">
                                                                                <img style="width: 20px !important"
                                                                                    src="{{ asset('icons/location.ico') }}">
                                                                            </span>
                                                                            <select id="inputState" id="location"
                                                                                class="form-select border border-primary chosen-select"
                                                                                style="border-color: #97a7c0 !important;"
                                                                                name="place">
                                                                                @foreach ($v as $viloyat)
                                                                                    <optgroup
                                                                                        label="{{ $viloyat->name_uz }}">
                                                                                        @foreach ($viloyat->tumanlari as $tuman)
                                                                                            <option
                                                                                                value="{{ $tuman->id }}"
                                                                                                {{ $work->place == $tuman->id ? 'selected' : '' }}>
                                                                                                {{ $tuman->name_uz }}
                                                                                            </option>
                                                                                        @endforeach
                                                                                    </optgroup>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                        <div class="d-flex">
                                                                            <div>
                                                                                <div class="d-flex mt-3">
                                                                                    <label>Ishchilar soni </label>
                                                                                    <p style="color: red">* Muxim</p>
                                                                                </div>
                                                                                <div class="col-sm-10 input-group"
                                                                                    style="width: 200px">
                                                                                    <span class="input-group-text">
                                                                                        <img style="width: 25px !important"
                                                                                            src="{{ asset('icons/workers.ico') }}">
                                                                                    </span>
                                                                                    <input style="border-color: #97a7c0"
                                                                                        type="number"
                                                                                        value="{{ $work->workers }}"
                                                                                        name="workers"
                                                                                        class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div style="margin-left: 15px">
                                                                                <div class="d-flex mt-3">
                                                                                    <label>Ish xaqqi </label>
                                                                                    <p style="color: red">* Muxim</p>
                                                                                </div>
                                                                                <div class="col-sm-10 input-group"
                                                                                    style="width: 200px">
                                                                                    <span class="input-group-text">
                                                                                        <img style="width: 25px !important"
                                                                                            src="{{ asset('icons/price.ico') }}">
                                                                                    </span>
                                                                                    <input style="border-color: #97a7c0"
                                                                                        type="number"
                                                                                        value="{{ $work->price }}"
                                                                                        name="price"
                                                                                        class="form-control">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div>
                                                                            <div class="d-flex mt-3">
                                                                                <label>Ish kuni </label>
                                                                                <p style="color: red">* Muxim</p>
                                                                            </div>
                                                                            <div class="col-sm-10 input-group"
                                                                                style="width: 200px">
                                                                                <span class="input-group-text">
                                                                                    <img style="width: 25px !important"
                                                                                        src="{{ asset('icons/calendar.ico') }}">
                                                                                </span>
                                                                                <input style="border-color: #97a7c0"
                                                                                    type="date" name="date"
                                                                                    value="{{ $work->date }}"
                                                                                    class="form-control">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div style="margin: 15px">
                                                                        <div class="d-flex">
                                                                            <label>To'liq ma'lumot </label>
                                                                            <p style="color: red">* Muxim</p>
                                                                        </div>
                                                                        <div class="col-sm-10 input-group"
                                                                            style="width: 415px;">
                                                                            <span class="input-group-text">
                                                                                <img style="width: 20px !important"
                                                                                    src="{{ asset('icons/description.ico') }}">
                                                                            </span>
                                                                            <textarea style="border-color: #97a7c0; height: 135px" class="form-control" name="description">{{ $work->description }}</textarea>
                                                                        </div>
                                                                        <div class="d-flex mt-3">
                                                                            <label>Kasbi </label>
                                                                            <p style="color: red">* Muxim</p>
                                                                        </div>
                                                                        <div class="col-sm-10 input-group "
                                                                            style="width: 415px">
                                                                            <span class="input-group-text">
                                                                                <img style="width: 20px !important"
                                                                                    src="{{ asset('icons/job.ico') }}">
                                                                            </span>
                                                                            <select id="inputState"
                                                                                class="form-select border border-primary chosen-select"
                                                                                style="border-color: #97a7c0 !important;"
                                                                                name="job">
                                                                                @foreach ($jobs as $job)
                                                                                    <option value="{{ $job->id }}"
                                                                                        {{ $work->job == $job->id ? 'selected' : '' }}>
                                                                                        {{ $job->name }}
                                                                                    </option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                        <div class="d-flex flex-row-reverse">
                                                                            <button style="margin-top: 50px;"
                                                                                class="btn btn-primary">Saqlash</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="modal fade" id="user_{{ $work->id }}" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="d-flex text-center mt-2">
                                                            <img style="width: 25px; margin-right: 5px"
                                                                src="{{ asset('icons/users.ico') }}" alt="">
                                                            <h6>{{ $work->workers }} ta odam
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <style>
        .modal-content {
            width: 900px !important;
            height: 445px;
        }

        .modal-dialog {
            margin-left: 20% !important;
        }
    </style>
    <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>
    <script>
        const stars = document.querySelectorAll(".stars i");

        // stars.forEach((star, index1) => {
        //     star.addEventListener("click", () => {
        //         stars.forEach((star, index2) => {
        //             index1 >= index2 ? star.classList.add("faol") : star.classList.remove(
        //                 "faol");
        //         });
        //     });
        // });
    </script>
@endsection
