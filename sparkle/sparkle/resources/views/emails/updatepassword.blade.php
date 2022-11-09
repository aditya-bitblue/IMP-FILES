<link rel="stylesheet" href="assets/css/style.css">

<div class="mainDiv">
    <div class="cardStyle">
        <form action="update_password" method="post">
            @csrf
            <h2 class="formTitle">
                Update Password
            </h2>


            <div class="inputDiv">
                <label class="inputLabel" for="password">New Password</label>
                <input type="password" id="password" name="password" required>
                @error('password')
                <p class="error">{{ $message }}</p>
                @enderror
            </div>

            <div class="inputDiv">
                <label class="inputLabel" for="confirmPassword">Confirm Password</label>
                <input type="password" id="confirmPassword" name="confirmPassword">
                @error('confirmPassword')
                <p class="error">{{ $message }}</p>
                @enderror
            </div>

            @if (Session::has('fail'))
            <br />
            <div class="wrongpass alert alert-info">{{ Session::get('fail') }}</div>
            @endif




            <div class="buttonWrapper">

                <button type="submit" id="submitButton" class="submitButton pure-button pure-button-primary">
                    <span>Continue</span>
                    <!--         <span id="loader"></span> -->
                </button>
            </div>



        </form>


    </div>

</div>