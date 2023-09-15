@extends('layouts.header')
@php
$name = auth()->user()->name;
$user = auth()->user();
@endphp
<div class="spinner-body">
    <div class="spinner-square">
        <div class="square-1 square"></div>
        <div class="square-2 square"></div>
        <div class="square-3 square"></div>
    </div>
</div>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar align-items-start sidebar sidebar-dark accordion bg-gradient-dark p-0 navbar-dark">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-laugh-wink"></i></div>
                    <div class="sidebar-brand-text mx-3"><span>{{ config('app.name', 'Zypheres') }}</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link active" href="{{ route('home') }}"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/profile/'.$user->id) }}"><i class="fas fa-user"></i><span>Profile</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="/table.html"><i class="fas fa-table"></i><span>Table</span></a></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-expand bg-white shadow mb-4 topbar static-top navbar-light">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <form class="d-none d-sm-inline-block me-auto ms-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ..."><button class="btn btn-dark py-0" type="button"><i class="fas fa-search"></i></button></div>
                        </form>
                        <ul class="navbar-nav flex-nowrap ms-auto">
                            <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><i class="fas fa-search"></i></a>
                                <div class="dropdown-menu dropdown-menu-end p-3 animated--grow-in" aria-labelledby="searchDropdown">
                                    <form class="me-auto navbar-search w-100">
                                        <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                            <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <!-- <li class="nav-item dropdown no-arrow mx-1">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="badge bg-danger badge-counter">3+</span><i class="fas fa-bell fa-fw"></i></a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in">
                                        <h6 class="dropdown-header">alerts center</h6>
                                       
                                        <div class="dropdown-item d-flex align-items-center">
                                            <div class="me-3">
                                                <div class="bg-primary icon-circle"><i class="fas fa-file-alt text-white"></i></div>
                                            </div>
                                            <div>
                                                <span class="small text-gray-500">December 12, 2019</span>
                                                <p></p>
                                            </div>
                                        </div>
                                       

                                        </a><a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                                    </div>
                                </div>
                            </li> -->
                            <!-- <li class="nav-item dropdown no-arrow mx-1">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="badge bg-danger badge-counter">7</span><i class="fas fa-envelope fa-fw"></i></a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in">
                                        <h6 class="dropdown-header">alerts center</h6><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="dropdown-list-image me-3"><img class="rounded-circle" src="/assets/img/avatars/avatar4.jpeg">
                                                <div class="bg-success status-indicator"></div>
                                            </div>
                                            <div class="fw-bold">
                                                <div class="text-truncate"><span>Hi there! I am wondering if you can help me with a problem I've been having.</span></div>
                                                <p class="small text-gray-500 mb-0">Emily Fowler - 58m</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="dropdown-list-image me-3"><img class="rounded-circle" src="/assets/img/avatars/avatar2.jpeg">
                                                <div class="status-indicator"></div>
                                            </div>
                                            <div class="fw-bold">
                                                <div class="text-truncate"><span>I have the photos that you ordered last month!</span></div>
                                                <p class="small text-gray-500 mb-0">Jae Chun - 1d</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="dropdown-list-image me-3"><img class="rounded-circle" src="/assets/img/avatars/avatar3.jpeg">
                                                <div class="bg-warning status-indicator"></div>
                                            </div>
                                            <div class="fw-bold">
                                                <div class="text-truncate"><span>Last month's report looks great, I am very happy with the progress so far, keep up the good work!</span></div>
                                                <p class="small text-gray-500 mb-0">Morgan Alvarez - 2d</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="dropdown-list-image me-3"><img class="rounded-circle" src="/assets/img/avatars/avatar5.jpeg">
                                                <div class="bg-success status-indicator"></div>
                                            </div>
                                            <div class="fw-bold">
                                                <div class="text-truncate"><span>Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</span></div>
                                                <p class="small text-gray-500 mb-0">Chicken the Dog · 2w</p>
                                            </div>
                                        </a><a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                                    </div>
                                </div>
                                <div class="shadow dropdown-list dropdown-menu dropdown-menu-end" aria-labelledby="alertsDropdown"></div>
                            </li> -->
                            <!-- <div class="d-none d-sm-block topbar-divider"></div> -->
                            <li class="nav-item dropdown no-arrow">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="d-none d-lg-inline me-2 text-gray-600 small">{{ $name }}</span><img class="border rounded-circle img-profile" src="{{ asset('images/' . $user->avatar) }}"></a>
                                    <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in"><a class="dropdown-item" href="/profile/{{ $user->id }}"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Profile</a><a class="dropdown-item" href="#"><i class="fas fa-cogs fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Settings</a><a class="dropdown-item" href="#"><i class="fas fa-list fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Activity log</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">
                                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>
                                                &nbsp;Logout
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h3 class="text-dark mb-0">Dashboard</h3>
                    </div>

                    <!--Main Content Starts here-->
                    <div class="cards">
                        <div class="search">
                            <input type="text" class="searchTerm" placeholder="Search City?" spellcheck="false">
                            <button type="submit" class="searchButton">
                                <i class="fa fa-search"></i>
                        </div>
                        <div class="error">
                            <p>City not found</p>
                        </div>
                        <div class="weather">
                            <img src="{{ asset('img/weather/rain.png')}}" class="weather-icon">
                            <h3 class="desc">--</h3>
                            <h1 class="temp">--</h1>
                            <h2 class="city">Search a city</h2>
                            <div class="details">
                                <div class="col">
                                    <img src="{{ asset('img/weather/humidity.png')}}">
                                    <div>
                                        <p class="humidity">--</p>
                                        <p>Humidity</p>
                                    </div>
                                </div>
                                <div class="col">
                                    <img src="{{ asset('img/weather/wind.png')}}">
                                    <div>
                                        <p class="wind">--</p>
                                        <p>Wind Speed</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script>
                        const apiKey = "fc8518ba17467025b268ee29bfe5e7c1";
                        const apiUrl = "https://api.openweathermap.org/data/2.5/weather?&units=metric&q=";

                        const searchTerm = document.querySelector(".searchTerm");
                        const searchButton = document.querySelector(".searchButton");
                        const weatherIcon = document.querySelector(".weather-icon");

                        async function checkWeather(city) {

                            const response = await fetch(apiUrl + city + `&appid=${apiKey}`);

                            if (response.status == 404) {
                                document.querySelector(".error").style.display = "block";
                                document.querySelector(".weather").style.display = "none";
                                return;
                            } else {

                                var data = await response.json();

                                document.querySelector(".desc").innerHTML = data.weather[0].main;
                                document.querySelector(".city").innerHTML = data.name;
                                document.querySelector(".temp").innerHTML = Math.round(data.main.temp) + "°C";
                                document.querySelector(".humidity").innerHTML = data.main.humidity + "%";
                                document.querySelector(".wind").innerHTML = data.wind.speed + " km/hr";

                                if (data.weather[0].main == "Clear") {
                                    document.querySelector(".weather-icon").src = "{{ asset('img/weather/clear.png')}}";
                                } else if (data.weather[0].main == "Clouds") {
                                    document.querySelector(".weather-icon").src = "{{ asset('img/weather/clouds.png')}}";
                                } else if (data.weather[0].main == "Rain") {
                                    document.querySelector(".weather-icon").src = "{{ asset('img/weather/rain.png')}}";
                                } else if (data.weather[0].main == "Snow") {
                                    document.querySelector(".weather-icon").src = "{{ asset('img/weather/snow.png')}}";
                                } else if (data.weather[0].main == "Drizzle") {
                                    document.querySelector(".weather-icon").src = "{{ asset('img/weather/drizzle.png')}}";
                                } else if (data.weather[0].main == "Mist") {
                                    document.querySelector(".weather-icon").src = "{{ asset('img/weather/mist.png')}}";
                                }

                                document.querySelector(".weather").style.display = "block";
                                document.querySelector(".error").style.display = "none";
                            }

                        }
                        searchButton.addEventListener("click", function() {
                            checkWeather(searchTerm.value);
                        });
                    </script>
                    <!--Main Content Ends here-->
                </div>
                @extends('layouts.footer')