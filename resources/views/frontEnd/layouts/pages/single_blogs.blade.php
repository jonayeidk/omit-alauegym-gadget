@extends('frontEnd.layouts.master')
@section('title', $blog_single->title)
@section('content')

<section class="blog-single-section">
    <div class="container">
        <div class="sorting-section">
            <div class="row">
                <div class="col-sm-6">
                    <div class="category-breadcrumb d-flex align-items-center">
                        <a href="{{ route('home') }}">Home</a>
                        <span>/</span>
                        <a href="{{ route('blogs') }}">Blog</a>
                        <span>/</span>
                        <strong>{{ Str::limit($blog_single->title, 20) }}</strong>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
           <div class="col-sm-2 filter_sidebar">
                    <div class="filter_close"><i class="fa fa-long-arrow-left"></i> Filter</div>
                    <form action="" class="attribute-submit">
                        <div class="sidebar_item wraper__item">
                            <div class="accordion" id="category_sidebar">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseCat" aria-expanded="true" aria-controls="collapseOne">
                                            Categories
                                        </button>
                                    </h2>
                                    <div id="collapseCat" class="accordion-collapse collapse show"
                                        data-bs-parent="#category_sidebar">
                                        <div class="accordion-body cust_according_body">
                                            <ul>
                                                
                                                <!-- Add your blog categories here -->
                                                <li><a href="#">All Blog Categories</a></li>
                                                @foreach ($blog_categorys as $key => $blog_category)
                                                <li><a href="{{ url('/category/blog') }}/{{ $blog_category->slug }}">{{$blog_category->name}}</a></li>
                                    
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            <!-- Main Content -->
            <div class="col-lg-9 order-lg-2">
                <article class="blog-single-post">
                    <div class="post-header">
                        <h1 class="post-title">{{ $blog_single->title }}</h1>
                        <div class="post-meta">
                            <span class="post-date">
                                <i class="fa fa-calendar"></i> 
                                {{ date('M d, Y', strtotime($blog_single->created_at)) }}
                            </span>
                    
                            <span class="post-author">
                                <i class="fa fa-user"></i> 
                               Admin
                            </span>
                            
                        </div>
                    </div>

                    <div class="post-thumbnail">
                        <img src="{{ $blog_single->getBlogPic() }}" 
                             alt="{{ $blog_single->title }}" 
                             class="img-fluid">
                    </div>

                    <div class="post-content">
                        {!! $blog_single->short_desc !!}
                    </div>
                    
                  
                    <br>
                    
                    <div class="post-content">
                        {!! $blog_single->long_desc !!}
                    </div>

                    <!-- Add social sharing buttons if needed -->
                    <!-- <div class="post-share">
                        <h5>Share this post:</h5>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div> -->

                    <!-- Add related posts section if needed -->
                    <!-- Add comments section if needed -->
                </article>
            </div>
        </div>
    </div>
</section>

@endsection

@section('scripts')
<!-- Add any specific scripts needed for the single post page -->
@endsection