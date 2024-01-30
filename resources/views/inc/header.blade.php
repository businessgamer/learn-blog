<div class="edu-navbar-area navbar-area edu-navbar-area2">
    <div class="edumim-responsive-nav">
        <div class="container">
            <div class="edumim-responsive-menu">
                <div class="logo">
                    <a href="/"><img src="{{ config('app.url') }}/assets/img/logo/logo.svg" alt="logo" /></a>
                </div>
            </div>
        </div>
    </div>
    @php
        $categories = TCG\Voyager\Models\Category::orderBy('order')->get();
    @endphp
    <div class="edumim-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="/">
                    <img src="{{ config('app.url') }}/assets/img/logo/logo.svg" alt="logo" />
                </a>
                <div class="collapse navbar-collapse mean-menu">
                    <ul class="navbar-nav">
                        @foreach ($categories as $category)
                            <li class="nav-item">
                                <a href="#" class="nav-link dropdown-toggle">{{ $category->name }}</a>
                                @php
                                    $blogs = TCG\Voyager\Models\Post::where(['category_id' => $category->id, 'status' => 'PUBLISHED'])->get();
                                @endphp
                                <ul class="dropdown-menu">
                                    @foreach ($blogs as $blog)
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">{{ $blog->title }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                        @endforeach
                        {{-- <li class="nav-item">
                            <a href="#" class="nav-link dropdown-toggle">Web Language</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="html-language-course" class="nav-link">HTML</a>
                                </li>
                                <li class="nav-item">
                                    <a href="php-language-course" class="nav-link">PHP</a>
                                </li>
                                <li class="nav-item">
                                    <a href="wordpress-website-desiging-course" class="nav-link">WordPress</a>
                                </li>
                                <li class="nav-item">
                                    <a href="css-language-course" class="nav-link">CSS</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="dropdown-toggle nav-link">Software Language</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="c++-languange-course" class="nav-link">C++</a>
                                </li>
                                <li class="nav-item">
                                    <a href="pythan-language-course" class="nav-link">Pythan</a>
                                </li>
                                <li class="nav-item">
                                    <a href="javascript-languange-course" class="nav-link">JavaScript</a>
                                </li>
                                <li class="nav-item">
                                    <a href="java-languange-course" class="nav-link">Java</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="dropdown-toggle nav-link">UP Board Science</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="science-for-10th-class" class="nav-link">Science For 10th Class</a>
                                </li>
                                <li class="nav-item">
                                    <a href="science-for-12th-class" class="nav-link">Science For 12th Class</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="dropdown-toggle nav-link">Creative Writing</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="free-content-writing-course" class="nav-link">Content Writing Course</a>
                                </li>

                                <li class="nav-item">
                                    <a href="free-filmscript-writing-course" class="nav-link">FilmScript Writing
                                        Course</a>
                                </li>
                                <li class="nav-item">
                                    <a href="free-lyrics-writing-course" class="nav-link">Lyrics Writing Course</a>
                                </li>
                            </ul>
                        </li> --}}
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>
