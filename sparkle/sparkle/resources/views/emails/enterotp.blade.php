<link rel="stylesheet" href="assets/css/style.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>


<body>
    <div class="mainDiv">
        <div class="cardStyle">

            <form method="post" action="verify_otp" class="">
                @csrf
                <h1 class="formTitle">Enter otp for <p>{{$email}}
                    <p>
                </h1>
                <div class="form-group inputDiv">
                    <label class="inputLabel" id="otp" for="otp">otp</label>
                    <input type="number" name="otp" id="otp" placeholder="Enter otp" class="form-control">
                    <!-- <button type="submit">submit</button> -->

                </div>
                <div class="buttonWrapper">


                    <button data-toggle="modal" data-target="#myModal" type="submit" id="submitButton" class="submitButton pure-button pure-button-primary">
                        <span>Verify</span>
                        <!--         <span id="loader"></span> -->
                    </button>
                </div>
            </form>
        </div>
    </div>

</body>