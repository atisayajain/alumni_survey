<nav class="navbar navbar-expand-md navbar-dark navbar-laravel bg-dark">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    AlumniSurvey
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        @auth
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('questions.index') }}">Questions</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('surveys.index') }}">Surveys</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('departments.index') }}">Departments</a>
                            </li>
                        @endauth

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('surveys.create') }}">Alumni Survey</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('surveys.exitCreate') }}">Exit Survey</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('surveys.employerCreate') }}">Employer Survey</a>
                        </li>


                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->

                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @else
                       
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </div>
                            </li>
                        @endguest

                    </ul>
                </div>
            </div>
        </nav>