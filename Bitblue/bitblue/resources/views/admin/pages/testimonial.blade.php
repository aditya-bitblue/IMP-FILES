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
                    <li class="active">Testimonial Information</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-head">
                                <header>TESTIMONIAL TABLE</header>
                                @if(Session::has('success'))
                                <div class="alert alert-success">{{Session::get('success')}}</div>
                                @endif
                                @if(Session::has('fail'))
                                <div class="alert alert-danger">{{Session::get('fail')}}</div>
                                @endif
                                <div class="tools">
                                    <!-- <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a> -->
                                    <a class="btn-color" href="add-testimonial"><button class="btn btn-primary">
                                            Add
                                        </button></a>
                                    <!-- <a class="t-close btn-color fa fa-times" href="javascript:;"></a> -->
                                </div>
                            </div>
                            <div class="card-body ">
                                <div class="table-responsive">
                                    <table class="table table-striped custom-table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Sr.No.</th>
                                                <th>Name</th>
                                                <th>Designation</th>
                                                <th>Rating</th>
                                                <th>Review</th>
                                                <th>Photo</th>
                                                <th class="pull-right">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $key=> $testimonial)
                                            <tr>
                                                <td>{{$key + 1}}</td>
                                                <td>{{ $testimonial['name']}}</td>
                                                <td>{{ $testimonial['designation']}}</td>
                                                <td>{{ $testimonial['rating']}}</td>
                                                <td>
                                                    {{ $testimonial['review'] }}
                                                </td>
                                                <td><img class="w-25 h-25" src="{{asset('/testimonial')}}/{{ $testimonial['image']}}" alt="">
                                                </td>
                                                <td>
                                                    <a href="{{route('edittestimonial',$testimonial['id'])}}">
                                                        <button class="btn btn-primary btn-xs">
                                                            <i class="fa fa-pencil"></i>
                                                        </button>
                                                    </a>
                                                    <a href="{{route('deletetestimonial',$testimonial['id'])}}">
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