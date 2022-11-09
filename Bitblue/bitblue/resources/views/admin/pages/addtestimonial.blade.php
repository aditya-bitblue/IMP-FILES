@include('./admin/adminheader')
@include('./admin/sidebar')
<!-- start page container -->
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Testimonial Information</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="{{asset('/')}}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="testimonials">Testimonial Information</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Add Testimonial Information</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header>Customer Review</header>
                    </div>
                    <form action="upload-testimonial" method="post" enctype="multipart/form-data">
                        @csrf
                        @if(Session::has('success'))
                        <div class="alert alert-success">{{Session::get('success')}}</div>
                        @endif
                        @if(Session::has('fail'))
                        <div class="alert alert-danger">{{Session::get('fail')}}</div>
                        @endif
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="Enter Name" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Rating</label>
                                        <input type="text" class="form-control" min="1" max="5" name="rating" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Image</label>
                                        <input accept="image/*" type="file" class="form-control" name="image" id="files" required>
                                        <div class="text-center">
                                            <img class="w-25 h-25  my-3" id="image">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Designation</label>
                                        <input type="text" class="form-control" name="designation" placeholder="Enter Designation" required>
                                    </div>
                                    <!-- textarea -->
                                    <div class="form-group">
                                        <label>Review</label>
                                        <textarea class="form-control" name="review" placeholder="Enter ..." required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@include('../admin/footer')