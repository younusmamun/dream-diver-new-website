<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <link href="{{asset('assets/dist/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">



        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <p>Hello</p>
                        <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px;">
                            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                              <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
                              <span class="fs-4">Sidebar</span>
                            </a>
                            <hr>
                            <ul class="nav nav-pills flex-column mb-auto">
                              <li class="nav-item">
                                <a href="#" class="nav-link active" aria-current="page">
                                  <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"/></svg>
                                  Home
                                </a>
                              </li>
                              <li>
                                <a href="#" class="nav-link text-white">
                                  <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"/></svg>
                                  Dashboard
                                </a>
                              </li>
                              <li>
                                <a href="#" class="nav-link text-white">
                                  <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"/></svg>
                                  Orders
                                </a>
                              </li>
                              <li>
                                <a href="#" class="nav-link text-white">
                                  <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"/></svg>
                                  Products
                                </a>
                              </li>
                              <li>
                                <a href="#" class="nav-link text-white">
                                  <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"/></svg>
                                  Customers
                                </a>
                              </li>
                            </ul>
                            <hr>
                            <div class="dropdown">
                              <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                                <strong>mdo</strong>
                              </a>
                              <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                                <li><a class="dropdown-item" href="#">New project...</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Sign out</a></li>
                              </ul>
                            </div>
                          </div>

                      </div>
                </div>
            </div>


            <!-- Page Heading -->

            {{-- @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif --}}

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
