<!DOCTYPE html>
<html lang="en">


<!-- auth-register.html  21 Nov 2019 04:05:01 GMT -->
<head>
  <meta charset="UTF-8">
  
 <meta name="keywords" content="view, watchvideo,youtube,utube,best porn video, porn video, earning site, best earning site, earn online, earn by video,">
    <meta property="og:title" content="Online Earning || Viewopidia" />
    <meta property="og:type" content="video site" />
    <meta property="og:url" content="https://viewopidia.com/" />
    <meta property="og:description" content="Viewopidia is a online earning site from that general user can earn money by sharing the youtube embeded link and share the viewopidia link user will be paid depending on the views makes on the viewopidia page " />
    <meta property="og:image" content="../assets/img/logo-removebg-preview.png" />
  <meta name="description" content="Viewopidia is a online earning platform. It opens the door of the youtuber for increase their earning. General people can earn by sharing the embeded link form youtube.">
  <meta name="keywords" content="HTML, CSS, JavaScript">
  <meta name="author" content="Viewopidia">
  <meta name="title" content="Viewopidia|| Online Earning Platform || Register">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Hotel management System</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/css/app.min.css">
  <link rel="stylesheet" href="assets/bundles/jquery-selectric/selectric.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />
  
</head>

<body>
  <!--<div class="loader"></div>-->
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="card card-primary">
              <div class="card-header">
                <h4>Register</h4>
                
              </div>
             
              <div class="card-body">
                <form method="POST" action="register_confirm.php">
                    
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="frist_name">User Name</label>
                      <input id="frist_name" type="text" class="form-control" name="username" autofocus>
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Phone Number</label>
                      <input id="last_name" type="text" class="form-control" name="phone">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email">
                    <div class="invalid-feedback">
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="password" class="d-block">Password</label>
                      <input id="password" type="password" class="form-control pwstrength" 
                        name="password">
                    
                    </div>
                    <div class="form-group col-6">
                      <label for="password2" class="d-block">Password Confirmation</label>
                      <input id="password2" type="password" class="form-control" name="password_confirm">
                    </div>
                  </div>
                  

                  <div class="form-group">
                    <label for="email">Hotel Name</label>
                    <input id="email" type="text" class="form-control" name="hotel_name">
                    <div class="invalid-feedback">
                        
                              
                    </div>
                     <div class="form-group">
                   
                          <label>Set Role AS</label>
                            <select class="form-control" name="access" required>
                             <option>admin</option>
                              
                            <option>Front Desk</option>
                            <option>Account Management</option>
                             <option>HR Management</option>
                              
                            <option>Restaurent Management</option>
                           
                           
                          </select>
                    </div>
              
                  </div>
                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="agree" class="custom-control-input" id="agree" required !important>
                      <label class="custom-control-label" for="agree" required !important>I agree with the <a href="dashboard.php">Terms And Condition</a></label>
                    
                    </div>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Register
                    </button>
                  </div>
                </form>
              </div>
              <div class="mb-4 text-muted text-center">
                Already Registered? <a href="index.php">Login</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
  </div>
  <!-- General JS Scripts -->
  <script src="assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <script src="assets/bundles/jquery-pwstrength/jquery.pwstrength.min.js"></script>
  <script src="assets/bundles/jquery-selectric/jquery.selectric.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="assets/js/page/auth-register.js"></script>
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="assets/js/custom.js"></script>
</body>


<!-- auth-register.html  21 Nov 2019 04:05:02 GMT -->
</html>