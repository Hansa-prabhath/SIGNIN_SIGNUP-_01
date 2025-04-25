<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZENOVIX_INSTITUTE</title>
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="bootstrap.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <div class="container vh-100">
        <div class="row">

            <div class="col-12">
                <div class="row">

                    <div class="col-6 justify-content-center align-items-center">
                        <div class="row">

                            <div class="col-12 mt-3 bg_colour d-block" id="signin_box_animation">
                                <div class="row">

                                    <div class="col-12 mt-5 d-flex justify-content-center align-items-center">
                                        <div class="row">
                                            <div class="d-flex align-items-center gap-3 mb-4">
                                                <div class="rounded-circle shadow d-flex justify-content-center align-items-center p-1" style="width: 80px;height: 80px;">
                                                    <img src="resource/zenovix_logo.jpg" class="img-fluid rounded-circle">
                                                </div>
                                                <span class="fw-bold text-white font_01" style="font-size: 40px;">Zenovix Institute</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 mt-4 d-flex justify-content-center align-items-center">
                                        <span class="fw-bold font_02" style="color: #ff3399;letter-spacing: 2px;">WELCOME BACK!</span>
                                    </div>

                                    <div class="col-10 offset-1 text-center mt-3">
                                        <p>Access your Zenovix Instittute learning Dashboard to continue your programing journey.</p>
                                    </div>

                                    <div class="col-10 offset-1 mt-3">
                                        <div class="row">

                                            <div class="col-12 mt-3 d-flex justify-content-center align-items-center">
                                                <div class="row">
                                                    <div class="col-2"></div>
                                                    <div class="col-2 d-flex justify-content-center align-items-center shadow rounded-circle bg-white" style="width: 50px;height: 50px;">
                                                        <span class="fs-4 ">📚</span>
                                                    </div>
                                                    <div class="col-8">
                                                        <h3 class="text-white fw-bold">Course Materials</h3>
                                                        <p class="text-secondary">Access all your course materials, tutorials, and resources</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12 mt-3 d-flex justify-content-center align-items-center">
                                                <div class="row">
                                                    <div class="col-2"></div>
                                                    <div class="col-2 d-flex justify-content-center align-items-center shadow rounded-circle bg-white" style="width: 50px;height: 50px;">
                                                        <span class="fs-4 ">📝</span>
                                                    </div>
                                                    <div class="col-8">
                                                        <h3 class="text-white fw-bold">Assignments</h3>
                                                        <p class="text-secondary">Submit your assignments and view feedback from instructors.</p>
                                                    </div>                            
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-10 offset-1 text-center mt-3">
                                        <p>Don't have an account? <button class="text-decoration-none bg-transparent border-0 fw-bold" style="color: #ff3399;" onclick="sign_animation();">SignUp Now</button></p>
                                    </div>

                                </div>
                            </div>

                            <div class="col-12 bg_colour d-none mt-3" style="background: #cc99ff;" id="signup_box_animation">
                                <div class="row">

                                    <div class="col-12 mt-5 d-flex justify-content-center align-items-center">
                                        <div class="row">
                                            <div class="d-flex align-items-center gap-3 mb-4">
                                                <div class="rounded-circle shadow d-flex justify-content-center align-items-center p-1" style="width: 80px;height: 80px;">
                                                    <img src="resource/zenovix_logo.jpg" class="img-fluid rounded-circle">
                                                </div>
                                                <span class="fw-bold text-white font_01" style="font-size: 40px;">Zenovix Institute</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 mt-2 d-flex justify-content-center align-items-center">
                                        <span class="fw-bold font_02" style="color: #ff3399;letter-spacing: 2px;">WELCOME !</span>
                                    </div>

                                    <div class="col-10 offset-1 text-center mt-2">
                                        <p>Unlock Your coding potential with our comprehensive programing course designed for beginners and aspiring developers.</p>
                                    </div>

                                    <div class="col-10 offset-1 mt-3 mb-2">
                                        <div class="row">
                                            <div class="col-12 d-flex justify-content-center align-items-center">
                                                <img src="resource/c_m_1.png" class="img-fluid" style="width: 260px;height: 250px;">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-10 offset-1 text-center mt-3">
                                        <p>Do you have an account? <button class="text-decoration-none bg-transparent border-0 fw-bold" style="color: #ff3399;" onclick="sign_animation();">SignIn Now</button></p>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-6 justify-content-center align-items-center vh-100">
                        <div class="row">

                            <div class="col-12 m-2 d-block" id="sign_in_box">
                                <div class="row">

                                    <label class="mt-4 mb-2 text-center font_01">SIGN IN</label>

                                    <div class="col-12 mt-3 mb-2 d-flex justify-content-center align-items-center">
                                        <div class="row">
                                            <div class="rounded-circle shadow mx-3 d-flex align-items-center justify-content-center" style="width: 60px;height: 60px;">
                                                <a href="#" class="text-center text-danger"><i class="bi bi-google fs-4"></i></a>
                                            </div>
                                            <div class="rounded-circle shadow mx-3 d-flex align-items-center justify-content-center" style="width: 60px;height: 60px;">
                                                <a href="#" class="text-center text-danger"><i class="bi bi-facebook fs-4"></i></a>
                                            </div>
                                            <div class="rounded-circle shadow mx-3 d-flex align-items-center justify-content-center" style="width: 60px;height: 60px;">
                                                <a href="#" class="text-center text-decoration-none text-danger"><span class="fs-4 fw-bold">in</span></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-10 offset-1 mt-4 mb-2">
                                        <div class="row">
                                            <div class="col-12 my-2 text-center d-none" id="msgdiv">
                                                <span class="fs-6 text-danger fw-bold">Hello</span>
                                            </div>
                                            <div class="col-12 my-3">
                                                <label class="form-label font_02" style="font-size: 20px;">Email Address</label>
                                                <input type="email" class="form-control fs-6" placeholder="Please Enter Your Email">
                                            </div>
                                            <div class="col-12 my-3">
                                                <label class="form-label font_02" style="font-size: 20px;">Password</label>
                                                <input type="password" class="form-control fs-6" placeholder="Please Enter Your Password">
                                            </div>
                                            <div class="col-12 my-3 d-flex justify-content-between align-items-center">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" value="0" id="defaultchekbox">
                                                    <label for="defaultchekbox" class="form-check-label">
                                                        Remember Me
                                                    </label>
                                                </div>
                                                <div>
                                                    <a href="#" class="text-decoration-none">Forgot Password?</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-10 offset-1 my-3 d-grid">
                                        <button type="button" class="btn btn-outline-dark fw-bold fs-4">SIGN IN</button>
                                    </div>

                                    <div class="col-10 offset-1 text-center">
                                        <span class="opacity-50 fs-6 text-secondary">Enter your credentials to access your account</span>
                                    </div>
                                   
                                </div>
                            </div>

                            <div class="col-12 m-2 d-none" id="sign_up_box">
                                <div class="row">

                                    <label class="mt-4 mb-2 text-center font_01">SIGN UP</label>

                                    <div class="col-12 mt-3 mb-2 d-flex justify-content-center align-items-center">
                                        <div class="row">
                                            <div class="rounded-circle shadow mx-3 d-flex align-items-center justify-content-center" style="width: 60px;height: 60px;">
                                                <a href="#" class="text-center text-danger"><i class="bi bi-google fs-4"></i></a>
                                            </div>
                                            <div class="rounded-circle shadow mx-3 d-flex align-items-center justify-content-center" style="width: 60px;height: 60px;">
                                                <a href="#" class="text-center text-danger"><i class="bi bi-facebook fs-4"></i></a>
                                            </div>
                                            <div class="rounded-circle shadow mx-3 d-flex align-items-center justify-content-center" style="width: 60px;height: 60px;">
                                                <a href="#" class="text-center text-decoration-none text-danger"><span class="fs-4 fw-bold">in</span></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-10 offset-1 mt-4 mb-2">
                                        <div class="row">

                                            <div class="col-12 my-2 text-center d-none" id="msgdiv">
                                                <span class="fs-6 text-danger fw-bold">Hello</span> 
                                            </div>
                                            <div class="col-6 my-2">
                                                <label class="form-label font_02" style="font-size: 20px;">First Name</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control fs-6 border-end-0"/>
                                                    <span class="input-group-text bg-transparent"><i class="bi bi-person-fill" style="color: #ff3399;"></i></span>
                                                </div>
                                            </div>
                                            <div class="col-6 my-2">
                                                <label class="form-label font_02" style="font-size: 20px;">Last Name</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control fs-6 border-end-0"/>
                                                    <span class="input-group-text bg-transparent"><i class="bi bi-person-fill" style="color: #ff3399;"></i></span>
                                                </div>
                                            </div>
                                            <div class="col-12 my-2">
                                                <label class="form-label font_02" style="font-size: 20px;">Email Address</label>
                                                <div class="input-group">
                                                    <input type="email" class="form-control fs-6 border-end-0"/>
                                                    <span class="input-group-text bg-transparent"><i class="bi bi-envelope-at-fill" style="color: #ff3399;"></i></span>
                                                </div>
                                            </div>
                                            <div class="col-6 my-2">
                                                <label class="form-label font_02" style="font-size: 20px;">Password</label>
                                                <div class="input-group">
                                                    <input type="password" class="form-control fs-6 border-end-0"/>
                                                    <span class="input-group-text bg-transparent"><i class="bi bi-lock-fill" style="color: #ff3399;"></i></span>
                                                </div>
                                            </div>
                                            <div class="col-6 my-2">
                                                <label class="form-label font_02" style="font-size: 20px;">Confirm Password</label>
                                                <div class="input-group">
                                                    <input type="password" class="form-control fs-6 border-end-0"/>
                                                    <span class="input-group-text bg-transparent"><i class="bi bi-lock-fill" style="color: #ff3399;"></i></span>
                                                </div>
                                            </div>
                                            <div class="col-6 my-2">
                                                <label class="form-label font_02" style="font-size: 20px;">Mobile</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control fs-6 border-end-0"/>
                                                    <span class="input-group-text bg-transparent"><i class="bi bi-phone-fill" style="color: #ff3399;"></i></span>
                                                </div>
                                            </div>
                                            <div class="col-6 my-2">
                                                <label class="form-label font_02" style="font-size: 20px;">Password</label>
                                                <select class="form-select">
                                                    <option value="0" selected>Select the Gender</option>
                                                    <option value="1">Male</option>
                                                    <option value="2">Female</option>
                                                    <option value="3">Other</option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-10 offset-1 d-grid my-3">
                                        <button type="button" class="btn btn-outline-dark fw-bold fs-4">SIGN UP</button>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    
<script src="script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/gsap.min.js"></script>
</body>
</html>