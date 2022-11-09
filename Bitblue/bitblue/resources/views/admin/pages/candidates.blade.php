@include('./admin/adminheader')
@include('./admin/sidebar')
<!-- start page container -->
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Candidates Information</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="{{asset('/')}}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Candidates Information</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-head">
                                <header>CANDIDATES TABLE</header>
                                @if(Session::has('success'))
                                <div class="alert alert-success">{{Session::get('success')}}</div>
                                @endif
                                @if(Session::has('fail'))
                                <div class="alert alert-danger">{{Session::get('fail')}}</div>
                                @endif
                            </div>
                            <div class="card-body ">
                                <div class="table-responsive">
                                    <table class="table table-striped custom-table table-hover">
                                        <thead>
                                            <tr>

                                                <th>Name</th>
                                                <th>Birth-Date</th>
                                                <th>Image</th>
                                                <th>Designation</th>
                                                <th>Gender</th>
                                                <th>Contact-no</th>
                                                <th>Email-id</th>
                                                <th>Qualification</th>
                                                <th>Languages</th>
                                                <th>Resume</th>
                                                <!-- <th class="pull-right">Action</th> -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $key=> $testimonial)
                                            <tr>
                                                <td>{{ $testimonial['candidateName']}}</td>
                                                <td>{{ $testimonial['dob']}}</td>
                                                <td><a href="{{asset('/candidateimage')}}/{{ $testimonial['candidateImage']}}">View image</a>
                                                <td>{{ $testimonial['designation']}}</td>
                                                <td>{{ $testimonial['gender']}}</td>
                                                <td>{{ $testimonial['phonenumber']}}</td>
                                                <td>{{ $testimonial['email']}}</td>
                                                <td>{{ $testimonial['qualification']}}</td>
                                                <td>{{ $testimonial['languages']}}</td>
                                                <td>
                                                    <a href="{{asset('/resumes')}}/{{ $testimonial['resume']}}">View Resume</a>

                                                </td>
                                                <!-- <td><img class="w-25 h-25" src="{{asset('/testimonial')}}/{{ $testimonial['image']}}" alt="">
                                                </td> -->
                                                <td>
                                                    <a href="{{route('deletecandidate',$testimonial['id'])}}">
                                                        <button class="btn btn-danger btn-xs">
                                                            <i class="fa fa-trash-o "></i>
                                                        </button>
                                                    </a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('../admin/footer')