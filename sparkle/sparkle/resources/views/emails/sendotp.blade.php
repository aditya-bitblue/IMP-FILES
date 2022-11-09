  <link rel="stylesheet" href="assets/css/style.css">

  <body>

      <div>
          <div class="mainDiv">
              <div class="cardStyle">

                  <form method="post" action="send_otp">
                      @csrf
                      <h1 class="formTitle">Enter Email-id to receive otp</h1>
                      <div class="form-group inputDiv">
                          <label class="inputLabel" for="password">Email-id</label>
                          <input type="email" name="email" id="email" placeholder="Enter email-id" class="form-control">
                          <!-- <button type="submit">send</button> -->

                      </div>
                      <div class="buttonWrapper">

                          <button type="submit" id="submitButton" class="submitButton pure-button pure-button-primary">
                              <span>Submit</span>
                              <!--         <span id="loader"></span> -->
                          </button>
                      </div>
                  </form>
              </div>
          </div>

      </div>