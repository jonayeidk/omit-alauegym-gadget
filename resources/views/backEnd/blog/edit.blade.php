

@extends('backEnd.layouts.master')
@section('title','Blog Edit')
@section('css')
<link href="{{asset('public/backEnd')}}/assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
<link href="{{asset('public/backEnd')}}/assets/css/switchery.min.css" rel="stylesheet" type="text/css" />
<link href="{{asset('public/backEnd')}}/assets/libs/summernote/summernote-lite.min.css" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<div class="container-fluid">
    
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <a href="{{route('blog.all')}}" class="btn btn-primary rounded-pill">Manage</a>
                </div>
                <h4 class="page-title">Blog Edit</h4>
            </div>
        </div>
    </div>       
    <!-- end page title --> 
   <div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
                <form action="" method="POST"   enctype="multipart/form-data">
                    @csrf
                    <div class="col-sm-12">
                        <div class="form-group mb-3">
                            <label for="name" class="form-label">Title *</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title',$edit_data->title) }}" id="title" required="">
                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <!-- col-end -->
                    
                    <div class="col-sm-12 mb-3">
                        <div class="form-group">
                            <label for="image" class="form-label">Image *</label>
                            <input type="file" class="form-control @error('blog_pic') is-invalid @enderror " name="blog_pic"  value="{{ old('blog_pic') }}"  id="image">
                       <img src="{{$edit_data->getBlogPic()}}" class="backend-image" alt="">
                            @error('blog_pic')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                nd-image" alt="">
                            @enderror
                        </div>
                    </div>
                    <!-- col end -->
                      <div class="col-sm-12">
                        <div class="form-group mb-3">
                            <label for="name" class="form-label">Blog Category *</label>
                           <select class="form-control" name="blog_category_id" required="">
                               @foreach($data as $row)
                               <option value="{{ $row->id }}" @if($row->id == $edit_data->blog_category_id) selected @endif>{{ $row->name }} </option>
                               
                                @endforeach
                           </select>
                        
                        </div>
                    </div>

                    
                   
                    <div class="col-sm-12">
                        <div class="form-group mb-3">
                            <label for="short_desc" class="form-label">Short Description*</label>
                            <textarea type="text" class="summernote form-control @error('short_desc') is-invalid @enderror" name="short_desc" rows="6" value="{{ old('short_desc') }}"  id="short_desc">{!!$edit_data->short_desc!!}</textarea>
                            @error('short_desc')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="col-sm-12">
                        <div class="form-group mb-3">
                            <label for="long_desc" class="form-label">Long Description*</label>
                            <textarea type="text" class="summernote form-control @error('long_desc') is-invalid @enderror" name="long_desc" rows="6" value="{{ old('short_desc') }}"  id="long_desc">{!!$edit_data->long_desc!!}</textarea>
                            @error('long_desc')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    
                    <!-- col-end -->

                    <div class="col-sm-12">
                        <div class="form-group mb-3">
                            <label for="name" class="form-label">Status *</label>
                           <select class="form-control" name="status" required="">
                                <option value="1" @if($edit_data->status == "1") selected @endif>Active</option>
                                <option value="0" @if($edit_data->status == "0") selected @endif>InActive</option>
                           </select>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
             
                    
                    <div>
                       <button type="submit" class="btn btn-primary">Update</button>
                    </div>

                </form>

            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col-->
   </div>
</div>
@endsection


@section('script')
<script src="{{asset('public/backEnd/')}}/assets/libs/parsleyjs/parsley.min.js"></script>
<script src="{{asset('public/backEnd/')}}/assets/js/pages/form-validation.init.js"></script>
<script src="{{asset('public/backEnd/')}}/assets/libs/select2/js/select2.min.js"></script>
<script src="{{asset('public/backEnd/')}}/assets/js/pages/form-advanced.init.js"></script>
<script src="{{asset('public/backEnd/')}}/assets/js/switchery.min.js"></script>
<script>
    $(document).ready(function(){
        var elem = document.querySelector('.js-switch');
        var init = new Switchery(elem);
    });
</script>

<script src="{{asset('public/backEnd/')}}/assets/libs//summernote/summernote-lite.min.js"></script>

<script>
    $(".summernote").summernote({
        placeholder: "Enter Your Text Here",
    });
</script>

@endsection