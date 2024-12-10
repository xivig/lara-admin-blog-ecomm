@extends('blog')
@section('title', 'Blog page')
{{--@section('title', 'Contact Us')--}}
{{--@section('page-title', 'Contact Us')--}}
{{--@section('page-heading', 'Get in Touch')--}}
@section('content')
    <section class="section blog-wrap bg-gray">
        <div class="container">
            <div class="row">
                @foreach($posts as $post)
                    {{--                    @foreach($images as $image)--}}
                    <div class="col-lg-6 col-md-6 mb-5">
                        <div class="blog-item">

                            {{--                                <img loading="lazy" src="{{$image->link}}" alt="blog"--}}
                            <img loading="lazy" src="{{asset('xivig-blog/images/blog/1.jpg')}}" alt="blog"
                                 class="img-fluid rounded">

                            <div class="blog-item-content bg-white p-4">
                                <div class="blog-item-meta  py-1 px-2">
                                    <span class="text-muted text-capitalize mr-3"><i class="ti-pencil-alt mr-2"></i>Creativity</span>
                                </div>

                                <h3 class="mt-3 mb-3"><a href="{{url('blog-post')}}">{{$post->title}}</a>
                                </h3>
                                <p class="mb-4">{{$post->excerpt}}</p>

                                <a href="{{url('blog-post')}}" class="btn btn-small btn-main btn-round-full">Learn
                                    More</a>
                            </div>
                        </div>
                    </div>
                    {{--                    @endforeach--}}
                @endforeach
                {{--                <div class="col-lg-6 col-md-6 mb-5">--}}
                {{--                    <div class="blog-item">--}}
                {{--                        <img loading="lazy" src="{{asset('xivig-blog/images/blog/2.jpg')}}" alt="blog"--}}
                {{--                             class="img-fluid rounded">--}}

                {{--                        <div class="blog-item-content bg-white p-4">--}}
                {{--                            <div class="blog-item-meta  py-1 px-2">--}}
                {{--                                <span class="text-muted text-capitalize mr-3"><i class="ti-pencil-alt mr-2"></i>Creativity</span>--}}
                {{--                            </div>--}}

                {{--                            <h3 class="mt-3 mb-3"><a href="{{url('blog-post')}}">Improve design with typography?</a>--}}
                {{--                            </h3>--}}
                {{--                            <p class="mb-4">Non illo quas blanditiis repellendus laboriosam minima animi. Consectetur--}}
                {{--                                accusantium--}}
                {{--                                pariatur repudiandae!</p>--}}

                {{--                            <a href="{{url('blog-post')}}" class="btn btn-small btn-main btn-round-full">Learn More</a>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}

                {{--                <div class="col-lg-6 col-md-6 mb-5">--}}
                {{--                    <div class="blog-item">--}}
                {{--                        <img loading="lazy" src="{{asset('xivig-blog/images/blog/3.jpg')}}" alt="blog"--}}
                {{--                             class="img-fluid rounded">--}}

                {{--                        <div class="blog-item-content bg-white p-4">--}}
                {{--                            <div class="blog-item-meta  py-1 px-2">--}}
                {{--                                <span class="text-muted text-capitalize mr-3"><i class="ti-pencil-alt mr-2"></i>Creativity</span>--}}
                {{--                            </div>--}}

                {{--                            <h3 class="mt-3 mb-3"><a href="{{url('blog-post')}}">Improve design with typography?</a>--}}
                {{--                            </h3>--}}
                {{--                            <p class="mb-4">Non illo quas blanditiis repellendus laboriosam minima animi. Consectetur--}}
                {{--                                accusantium--}}
                {{--                                pariatur repudiandae!</p>--}}

                {{--                            <a href="{{url('blog-post')}}" class="btn btn-small btn-main btn-round-full">Learn More</a>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--                <div class="col-lg-6 col-md-6 mb-5">--}}
                {{--                    <div class="blog-item">--}}
                {{--                        <img loading="lazy" src="{{asset('xivig-blog/images/blog/4.jpg')}}" alt="blog"--}}
                {{--                             class="img-fluid rounded">--}}

                {{--                        <div class="blog-item-content bg-white p-4">--}}
                {{--                            <div class="blog-item-meta  py-1 px-2">--}}
                {{--                                <span class="text-muted text-capitalize mr-3"><i class="ti-pencil-alt mr-2"></i>Creativity</span>--}}
                {{--                            </div>--}}

                {{--                            <h3 class="mt-3 mb-3"><a href="{{url('blog-post')}}">Improve design with typography?</a>--}}
                {{--                            </h3>--}}
                {{--                            <p class="mb-4">Non illo quas blanditiis repellendus laboriosam minima animi. Consectetur--}}
                {{--                                accusantium--}}
                {{--                                pariatur repudiandae!</p>--}}

                {{--                            <a href="{{url('blog-post')}}" class="btn btn-small btn-main btn-round-full">Learn More</a>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}

            </div>

            <div class="row justify-content-center mt-5">
                <div class="col-lg-6 text-center">

                    <nav class="navigation pagination d-inline-block">
                        <div class="nav-links">

                            {{--                            <a class="prev page-numbers" href="#">Prev</a>--}}
                            {{--                            <span aria-current="page" class="page-numbers current">1</span>--}}
                            {{--                            <a class="page-numbers" href="#">2</a>--}}
                            {{ $posts->links() }}
                            {{--                            <a class="next page-numbers" href="#">Next</a>--}}
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </section>
@endsection
