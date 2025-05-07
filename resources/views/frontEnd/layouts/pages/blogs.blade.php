@extends('frontEnd.layouts.master')
@section('title','Blog  List')
@section('content')


    <section class="blog-section">
        <div class="container">
            <div class="sorting-section">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="category-breadcrumb d-flex align-items-center">
                            <a href="{{ route('home') }}">Home</a>
                            <span>/</span>
                            <strong>Blog List</strong>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="showing-data">
                                    <span>Showing {{ $blogs->count() }} Results</span>
                                </div>
                            </div>
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
                
                <div class="col-sm-10">
                    <div class="row blog-list">
                        @foreach ($blogs as $key => $blog)
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="blog-item card h-100 wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.{{ $key }}">
                                <div class="blog-image">
                                    <a href="{{ url('/blog/single') }}/{{ $blog->slug }}">
                                        <img src="{{$blog->getBlogPic()  }}" 
                                             alt="{{ $blog->title }}" class="img-fluid card-img-top">
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h5 class="blog-title card-title">
                                        <a href="">
                                            {{ Str::limit($blog->title, 35) }}
                                        </a>
                                    </h5>
                                    <p class="blog-excerpt card-text">
                                        {{ Str::limit(strip_tags($blog->short_desc), 100) }}
                                    </p>
                                </div>
                                <div class="card-footer bg-transparent">
                                    <a href="{{ url('/blog/single') }}/{{ $blog->slug }}" class="btn btn-primary">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-sm-12">
                    <div class="custom_paginate">
                        {{ $blogs->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

