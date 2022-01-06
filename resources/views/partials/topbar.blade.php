<div class="h14-topbar">
    <div class="container">
        <nav class="navbar navbar-expand-lg font-14">
            <a href="#" class="navbar-brand hidden-lg-up">
                Top Menu
            </a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#header14a"
                aria-controls="header14a" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fas fa-ellipsis-h text-grey"></span>
            </button>
            <div class="navbar-collapse collapse" id="header14a">
                <ul class="navbar-nav horizontal">
                    <li class="nav-item">
                        <a class="nav-link hover:text-primary"
                            href="https://www.facebook.com/PetrokimiaGresikOfficial/">
                            <i class="fab fa-facebook-square"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link hover:text-primary" href="https://twitter.com/petrogresik">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link hover:text-primary" href="https://twitter.com/petrogresik">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link hover:text-primary" href="https://twitter.com/petrogresik">
                            <i class="fab fa-linkedin"></i>
                        </a>
                    </li>
                </ul>
                <ul class="language-selector navbar-nav horizontal ml-auto">
                    <li class="nav-item"> <a class="hover:text-primary nav-link text-capitalize  "
                            href="/">{{ __('messages.home') }}
                        </a></li>
                    <li class="nav-item"> <a class="hover:text-primary nav-link text-capitalize  "
                            href="https://petrokimia-gresik.com/link/sitemap">Sitemap </a></li>
                    @foreach (Config::get('languages') as $lang => $language)
                    <li class="nav-item">
                        <a class="nav-link active lift-up" href="{{ route('lang.switch', $lang) }}">
                            <img width="30" alt="{{ $lang }}" class="lang shadow-sm hover:shadow"
                                src="https://petrokimia-gresik.com/images/{{ $lang }}.svg">
                        </a>
                    </li>
                    @endforeach
                </ul>
                {{-- <form class="d-flex">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link hover:text-primary" href="/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link hover:text-primary" href="#">Sitemap</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active lift-up" href="?hl=id">
                                    <img width="30" alt="id" class="lang shadow-sm hover:shadow"
                                        src="https://petrokimia-gresik.com/images/id.svg">
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active lift-up" href="?hl=en">
                                    <img width="30" alt="en" class="lang shadow-sm hover:shadow"
                                        src="https://petrokimia-gresik.com/images/en.svg">
                                </a>
                            </li>
                        </ul>
                    </form> --}}
            </div>
        </nav>
    </div>
</div>
