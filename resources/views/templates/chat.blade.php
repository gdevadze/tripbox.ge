@extends('user.layouts.app')

@section('content')
    <main>


        @include('user.general.header')



        <div class="page-content">

        @include('user.particials.user-header')


            <div class="page-content-wrapper p-xxl-4">


            <style>

.bg-of-boxes {
    background: #DAF7F97D;
border: 0;
}
.bg-of-boxes h5 {
    color: #2A2E49;
    margin-bottom: 10px ;
font-weight: bold;
}
</style>



<div class="row g-4 mb-5 " style="  ">


<div class="col-md-3" style="   border-right: 1px solid #CEC9C9; margin-top: 0px; padding-top: 20px;">

    <div class="">

        <img src="https://tripbox.phpweb.ge/assets/images/svg/search-icon.svg" style="position: absolute; margin-top: 12px;">
        <input class="form-control" placeholder="Искать" style="padding-left:25px;border: 0; border-bottom: 2px solid #898B9E; border-radius: 0px;">
    
</div>


<div class="d-flex mb-3 mt-3"  style="border: 1px solid #B9ACAC; padding: 15px; border-radius: 15px;">
    <div>
        <img style="width: 85px;margin-right: 10px;" src="https://tripbox.phpweb.ge/assets/images/no-photo-avatar.png">
    </div>
    <div style="padding-top: 20px;">
        <h5>Giorgi lazi</h5>
        <p>მანქანა - 12 </p>
    </div>
</div>

<div class="d-flex mb-3 mt-3"  style="border: 1px solid #B9ACAC; padding: 15px; border-radius: 15px;">
    <div>
        <img style="width: 85px;margin-right: 10px;" src="https://tripbox.phpweb.ge/assets/images/no-photo-avatar.png">
    </div>
    <div style="padding-top: 20px;">
        <h5>Giorgi lazi</h5>
        <p>მანქანა - 12 </p>
    </div>
</div>

<div class="d-flex mb-3 mt-3"  style="border: 1px solid #B9ACAC; padding: 15px; border-radius: 15px;">
    <div>
        <img style="width: 85px;margin-right: 10px;" src="https://tripbox.phpweb.ge/assets/images/no-photo-avatar.png">
    </div>
    <div style="padding-top: 20px;">
        <h5>Giorgi lazi</h5>
        <p>მანქანა - 12 </p>
    </div>
</div>

<div class="d-flex mb-3 mt-3"  style="border: 1px solid #B9ACAC; padding: 15px; border-radius: 15px;">
    <div>
        <img style="width: 85px;margin-right: 10px;" src="https://tripbox.phpweb.ge/assets/images/no-photo-avatar.png">
    </div>
    <div style="padding-top: 20px;">
        <h5>Giorgi lazi</h5>
        <p>მანქანა - 12 </p>
    </div>
</div>

<div class="d-flex mb-3 mt-3"  style="border: 1px solid #B9ACAC; padding: 15px; border-radius: 15px;">
    <div>
        <img style="width: 85px;margin-right: 10px;" src="https://tripbox.phpweb.ge/assets/images/no-photo-avatar.png">
    </div>
    <div style="padding-top: 20px;">
        <h5>Giorgi lazi</h5>
        <p>მანქანა - 12 </p>
    </div>
</div>

<div class="d-flex mb-3 mt-3"  style="border: 1px solid #B9ACAC; padding: 15px; border-radius: 15px;">
    <div>
        <img style="width: 85px;margin-right: 10px;" src="https://tripbox.phpweb.ge/assets/images/no-photo-avatar.png">
    </div>
    <div style="padding-top: 20px;">
        <h5>Giorgi lazi</h5>
        <p>მანქანა - 12 </p>
    </div>
</div>

<div class="d-flex mb-3 mt-3"  style="border: 1px solid #B9ACAC; padding: 15px; border-radius: 15px;">
    <div>
        <img style="width: 85px;margin-right: 10px;" src="https://tripbox.phpweb.ge/assets/images/no-photo-avatar.png">
    </div>
    <div style="padding-top: 20px;">
        <h5>Giorgi lazi</h5>
        <p>მანქანა - 12 </p>
    </div>
</div>




</div>
<style>

/* *******************************
message-area
******************************** */

.message-area {
height: 100vh;
overflow: hidden;
padding: 30px 0;
background: #f5f5f5;
}

.chat-area {
position: relative;
width: 100%;
background-color: #fff;
border-radius: 0.3rem;
height: 90vh;
overflow: hidden;
min-height: calc(100% - 1rem);
}

.chatlist {
outline: 0;
height: 100%;
overflow: hidden;
width: 300px;
float: left;
padding: 15px;
}

.chat-area .modal-content {
border: none;
border-radius: 0;
outline: 0;
height: 100%;
}

.chat-area .modal-dialog-scrollable {
height: 100% !important;
}

.chatbox {
width: auto;
overflow: hidden;
height: 100%;
border-left: 1px solid #ccc;
}

.chatbox .modal-dialog,
.chatlist .modal-dialog {
max-width: 100%;
margin: 0;
}

.msg-search {
display: flex;
align-items: center;
justify-content: space-between;
}

.chat-area .form-control {
display: block;
width: 80%;
padding: 0.375rem 0.75rem;
font-size: 14px;
font-weight: 400;
line-height: 1.5;
color: #222;
background-color: #fff;
background-clip: padding-box;
border: 1px solid #ccc;
-webkit-appearance: none;
-moz-appearance: none;
appearance: none;
border-radius: 0.25rem;
transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
}

.chat-area .form-control:focus {
outline: 0;
box-shadow: inherit;
}

a.add img {
height: 36px;
}

.chat-area .nav-tabs {
border-bottom: 1px solid #dee2e6;
align-items: center;
justify-content: space-between;
flex-wrap: inherit;
}

.chat-area .nav-tabs .nav-item {
width: 100%;
}

.chat-area .nav-tabs .nav-link {
width: 100%;
color: #180660;
font-size: 14px;
font-weight: 500;
line-height: 1.5;
text-transform: capitalize;
margin-top: 5px;
margin-bottom: -1px;
background: 0 0;
border: 1px solid transparent;
border-top-left-radius: 0.25rem;
border-top-right-radius: 0.25rem;
}

.chat-area .nav-tabs .nav-item.show .nav-link,
.chat-area .nav-tabs .nav-link.active {
color: #222;
background-color: #fff;
border-color: transparent transparent #000;
}

.chat-area .nav-tabs .nav-link:focus,
.chat-area .nav-tabs .nav-link:hover {
border-color: transparent transparent #000;
isolation: isolate;
}

.chat-list h3 {
color: #222;
font-size: 16px;
font-weight: 500;
line-height: 1.5;
text-transform: capitalize;
margin-bottom: 0;
}

.chat-list p {
color: #343434;
font-size: 14px;
font-weight: 400;
line-height: 1.5;
text-transform: capitalize;
margin-bottom: 0;
}

.chat-list a.d-flex {
margin-bottom: 15px;
position: relative;
text-decoration: none;
}

.chat-list .active {
display: block;
content: '';
clear: both;
position: absolute;
bottom: 3px;
left: 34px;
height: 12px;
width: 12px;
background: #00DB75;
border-radius: 50%;
border: 2px solid #fff;
}

.msg-head h3 {
color: #222;
font-size: 18px;
font-weight: 600;
line-height: 1.5;
margin-bottom: 0;
}

.msg-head p {
color: #343434;
font-size: 14px;
font-weight: 400;
line-height: 1.5;
text-transform: capitalize;
margin-bottom: 0;
}

.msg-head {
padding: 15px;
border-bottom: 1px solid #ccc;
}

.moreoption {
display: flex;
align-items: center;
justify-content: end;
}

.moreoption .navbar {
padding: 0;
}

.moreoption li .nav-link {
color: #222;
font-size: 16px;
}

.moreoption .dropdown-toggle::after {
display: none;
}

.moreoption .dropdown-menu[data-bs-popper] {
top: 100%;
left: auto;
right: 0;
margin-top: 0.125rem;
}

.msg-body ul {
overflow: hidden;
}

.msg-body ul li {
list-style: none;
margin: 15px 0;
}

.msg-body ul li.sender {
display: block;
width: 100%;
position: relative;
}

.msg-body ul li.sender:before {
display: block;
clear: both;
content: '';
position: absolute;
top: -6px;
left: -7px;
width: 0;
height: 0;
border-style: solid;
border-width: 0 12px 15px 12px;
border-color: transparent transparent #f5f5f5 transparent;
-webkit-transform: rotate(-37deg);
-ms-transform: rotate(-37deg);
transform: rotate(-37deg);
}

.msg-body ul li.sender p {
color: #000;
font-size: 14px;
line-height: 1.5;
font-weight: 400;
padding: 15px;
background: #f5f5f5;
display: inline-block;
border-bottom-left-radius: 10px;
border-top-right-radius: 10px;
border-bottom-right-radius: 10px;
margin-bottom: 0;
}

.msg-body ul li.sender p b {
display: block;
color: #180660;
font-size: 14px;
line-height: 1.5;
font-weight: 500;
}

.msg-body ul li.repaly {
display: block;
width: 100%;
text-align: right;
position: relative;
}

.msg-body ul li.repaly:before {
display: block;
clear: both;
content: '';
position: absolute;
bottom: 15px;
right: -7px;
width: 0;
height: 0;
border-style: solid;
border-width: 0 12px 15px 12px;
border-color: transparent transparent #4b7bec transparent;
-webkit-transform: rotate(37deg);
-ms-transform: rotate(37deg);
transform: rotate(37deg);
}

.msg-body ul li.repaly p {
color: #fff;
font-size: 14px;
line-height: 1.5;
font-weight: 400;
padding: 15px;
background: #4b7bec;
display: inline-block;
border-top-left-radius: 10px;
border-top-right-radius: 10px;
border-bottom-left-radius: 10px;
margin-bottom: 0;
}

.msg-body ul li.repaly p b {
display: block;
color: #061061;
font-size: 14px;
line-height: 1.5;
font-weight: 500;
}

.msg-body ul li.repaly:after {
display: block;
content: '';
clear: both;
}

.time {
display: block;
color: #000;
font-size: 12px;
line-height: 1.5;
font-weight: 400;
}

li.repaly .time {
margin-right: 20px;
}

.divider {
position: relative;
z-index: 1;
text-align: center;
}

.msg-body h6 {
text-align: center;
font-weight: normal;
font-size: 14px;
line-height: 1.5;
color: #222;
background: #fff;
display: inline-block;
padding: 0 5px;
margin-bottom: 0;
}

.divider:after {
display: block;
content: '';
clear: both;
position: absolute;
top: 12px;
left: 0;
border-top: 1px solid #EBEBEB;
width: 100%;
height: 100%;
z-index: -1;
}

.send-box {
padding: 15px;
border-top: 1px solid #ccc;
}

.send-box form {
display: flex;
align-items: center;
justify-content: space-between;
margin-bottom: 15px;
}

.send-box .form-control {
display: block;
width: 85%;
padding: 0.375rem 0.75rem;
font-size: 14px;
font-weight: 400;
line-height: 1.5;
color: #222;
background-color: #fff;
background-clip: padding-box;
border: 1px solid #ccc;
-webkit-appearance: none;
-moz-appearance: none;
appearance: none;
border-radius: 0.25rem;
transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
}

.send-box button {
border: none;
background: #3867d6;
padding: 0.375rem 5px;
color: #fff;
border-radius: 0.25rem;
font-size: 14px;
font-weight: 400;
width: 24%;
margin-left: 1%;
}

.send-box button i {
margin-right: 5px;
}

.send-btns .button-wrapper {
position: relative;
width: 125px;
height: auto;
text-align: left;
margin: 0 auto;
display: block;
background: #F6F7FA;
border-radius: 3px;
padding: 5px 15px;
float: left;
margin-right: 5px;
margin-bottom: 5px;
overflow: hidden;
}

.send-btns .button-wrapper span.label {
position: relative;
z-index: 1;
display: -webkit-box;
display: -ms-flexbox;
display: flex;
-webkit-box-align: center;
-ms-flex-align: center;
align-items: center;
width: 100%;
cursor: pointer;
color: #343945;
font-weight: 400;
text-transform: capitalize;
font-size: 13px;
}

#upload {
display: inline-block;
position: absolute;
z-index: 1;
width: 100%;
height: 100%;
top: 0;
left: 0;
opacity: 0;
cursor: pointer;
}

.send-btns .attach .form-control {
display: inline-block;
width: 120px;
height: auto;
padding: 5px 8px;
font-size: 13px;
font-weight: 400;
line-height: 1.5;
color: #343945;
background-color: #F6F7FA;
background-clip: padding-box;
border: 1px solid #F6F7FA;
border-radius: 3px;
margin-bottom: 5px;
}

.send-btns .button-wrapper span.label img {
margin-right: 5px;
}

.button-wrapper {
position: relative;
width: 100px;
height: 100px;
text-align: center;
margin: 0 auto;
}

button:focus {
outline: 0;
}

.add-apoint {
display: inline-block;
margin-left: 5px;
}

.add-apoint a {
text-decoration: none;
background: #F6F7FA;
border-radius: 8px;
padding: 8px 8px;
font-size: 13px;
font-weight: 400;
line-height: 1.2;
color: #343945;
}

.add-apoint a svg {
margin-right: 5px;
}

.chat-icon {
display: none;
}

.closess i {
display: none;
}



@media (max-width: 767px) {
.chat-icon {
display: block;
margin-right: 5px;
}
.chatlist {
width: 100%;
}
.chatbox {
width: 100%;
position: absolute;
left: 1000px;
right: 0;
background: #fff;
transition: all 0.5s ease;
border-left: none;
}
.showbox {
left: 0 !important;
transition: all 0.5s ease;
}
.msg-head h3 {
font-size: 14px;
}
.msg-head p {
font-size: 12px;
}
.msg-head .flex-shrink-0 img {
height: 30px;
}
.send-box button {
width: 28%;
}
.send-box .form-control {
width: 70%;
}
.chat-list h3 {
font-size: 14px;
}
.chat-list p {
font-size: 12px;
}
.msg-body ul li.sender p {
font-size: 13px;
padding: 8px;
border-bottom-left-radius: 6px;
border-top-right-radius: 6px;
border-bottom-right-radius: 6px;
}
.msg-body ul li.repaly p {
font-size: 13px;
padding: 8px;
border-top-left-radius: 6px;
border-top-right-radius: 6px;
border-bottom-left-radius: 6px;
}
}
.message-area {
height: 100vh;
overflow: hidden;
padding: 30px 0;
background: #ffffff;
}
</style>
<div class="col-md-9">

    <section class="message-area">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="chat-area">
               
                <!-- chatbox -->
                <div class="chatbox showbox">
                  <div class="modal-dialog-scrollable">
                    <div class="modal-content">
                      <div class="msg-head">
                        <div class="row">
                          <div class="col-8">
                            <div class="d-flex align-items-center">
                              <span class="chat-icon"><img class="img-fluid" src="https://mehedihtml.com/chatbox/assets/img/arroleftt.svg" alt="image title"></span>
                              <div class="flex-shrink-0">
                                <img class="img-fluid" src="https://mehedihtml.com/chatbox/assets/img/user.png" alt="user img">
                              </div>
                              <div class="flex-grow-1 ms-3">
                                <h3>გიორგი ლაზიშვილი</h3>
                                <p></p>
                              </div>
                            </div>
                          </div>
                          <div class="col-4">
                            <ul class="moreoption">
                              <li class="navbar nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v" aria-hidden="true"></i></a>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="#">Action</a></li>
                                  <li><a class="dropdown-item" href="#">Another action</a></li>
                                  <li>
                                    <hr class="dropdown-divider">
                                  </li>
                                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
      
                      <div class="modal-body">
                        <div class="msg-body">
                          <ul>
                            <li class="sender">
                              <p> Hey, Are you there? </p>
                              <span class="time">10:06 am</span>
                            </li>
                            <li class="sender">
                              <p> Hey, Are you there? </p>
                              <span class="time">10:16 am</span>
                            </li>
                            <li class="repaly">
                              <p>yes!</p>
                              <span class="time">10:20 am</span>
                            </li>
                            <li class="sender">
                              <p> Hey, Are you there? </p>
                              <span class="time">10:26 am</span>
                            </li>
                            <li class="sender">
                              <p> Hey, Are you there? </p>
                              <span class="time">10:32 am</span>
                            </li>
                            <li class="repaly">
                              <p>How are you?</p>
                              <span class="time">10:35 am</span>
                            </li>
                            <li>
                              <div class="divider">
                                <h6>Today</h6>
                              </div>
                            </li>
      
                            <li class="repaly">
                              <p> yes, tell me</p>
                              <span class="time">10:36 am</span>
                            </li>
                            <li class="repaly">
                              <p>yes... on it</p>
                              <span class="time">junt now</span>
                            </li>
      
                          </ul>
                        </div>
                      </div>
      
                      <div class="send-box">
                        <form action="">
                          <input type="text" class="form-control" aria-label="message…" placeholder="Write message…">
      
                          <button type="button"><i class="fa fa-paper-plane" aria-hidden="true"></i> Send</button>
                        </form>
      
                        <div class="send-btns">
                          <div class="attach">
                            <div class="button-wrapper">
                              <span class="label">
                                <img class="img-fluid" src="https://mehedihtml.com/chatbox/assets/img/upload.svg" alt="image title"> attached file
                              </span><input type="file" name="upload" id="upload" class="upload-box" placeholder="Upload File" aria-label="Upload File">
                            </div>
      
                            <select class="form-control" id="exampleFormControlSelect1">
                              <option>Select template</option>
                              <option>Template 1</option>
                              <option>Template 2</option>
                            </select>
      
                            <div class="add-apoint">
                              <a href="#" data-toggle="modal" data-target="#exampleModal4"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16" fill="none">
                                  <path d="M8 16C3.58862 16 0 12.4114 0 8C0 3.58862 3.58862 0 8 0C12.4114 0 16 3.58862 16 8C16 12.4114 12.4114 16 8 16ZM8 1C4.14001 1 1 4.14001 1 8C1 11.86 4.14001 15 8 15C11.86 15 15 11.86 15 8C15 4.14001 11.86 1 8 1Z" fill="#7D7D7D" />
                                  <path d="M11.5 8.5H4.5C4.224 8.5 4 8.276 4 8C4 7.724 4.224 7.5 4.5 7.5H11.5C11.776 7.5 12 7.724 12 8C12 8.276 11.776 8.5 11.5 8.5Z" fill="#7D7D7D" />
                                  <path d="M8 12C7.724 12 7.5 11.776 7.5 11.5V4.5C7.5 4.224 7.724 4 8 4C8.276 4 8.5 4.224 8.5 4.5V11.5C8.5 11.776 8.276 12 8 12Z" fill="#7D7D7D" />
                                </svg> Appoinment</a>
                            </div>
                          </div>
                        </div>
      
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- chatbox -->
      
            </div>
          </div>
        </div>
        </div>
      </section>





</div>




</div>








<!-- .... -->







            </div>

        </div>


    </main>
@endsection

@push('js')


<div class="modal fade" id="orderss" tabindex="-1" aria-labelledby="orderssLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl ">
        <div class="modal-content" style="    padding: 20px;">

            <div class="modal-body" style=" padding: 0px;">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="    position: absolute;
						right: 0;
						margin-right: 60px;
						margin-top: 20px;z-index: 10000;"></button>
               


                <div class="">
                 

<!-- ---->

<div class="card-header border-bottom p-4" style="    margin-bottom: 20px;">
							<h1 class="mb-0 fs-3" style="font-size: 25px!important;margin-bottom: 20px;">ჩემი ჯავშანი #1</h1>
						</div>




<div class="row">

<div class="col">

<div class="card shadow rounded-2"  style="    padding: 20px;">



<p>სულ თანხა</p>
<h5>2424$</h5>

</div>
</div>
<div class="col">
<div class="card shadow rounded-2" style="    padding: 20px;">
<p>გასავლელი მანძილი</p>
<h5>150 კმ</h5>
</div>
</div>
<div class="col">
<div class="card shadow rounded-2"  style="    padding: 20px;">
<p>ხანგძლივობა</p>
<h5>4 დღე</h5>
</div>
</div>
<div class="col">
<div class="card shadow rounded-2"  style="    padding: 20px;">
<p>გზად ნახავთ</p>
<h5>5 ქალაქს</h5>
</div>
</div>


</div>


<div class="row">
<div class="col-md-8">


<!-- car -->
<div class="card  shadow p-4" style="margin-top: 30px;">
						
						<div class="card-body p-0">
							<div class="row g-4 align-items-center">
							
								<div class="col-md-4">
									<div class="bg-light rounded-3 px-4 py-5">
										<img src="/assets/images/car-inside.png" alt="">
									</div>
								</div>

								
								<div class="col-md-8">
							
									<div class="d-sm-flex justify-content-sm-between">
									
										<div>
											<h4 class="card-title mb-2">CHEVROLET Captiva</h4>
											<ul class="nav nav-divider h6 fw-normal mb-2">
												<li class="nav-item">ჯიპი</li>
												<li class="nav-item">ავტ</li>
												<li class="nav-item">4 ადგლი</li>
											</ul>
										</div>
									
										<ul class="list-inline mb-0">
											<li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
											<li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
											<li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
											<li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
											<li class="list-inline-item"><i class="fa-solid fa-star-half-alt text-warning"></i></li>
										</ul>
									</div>

								
									<ul class="list-group list-group-borderless mt-2 mb-0">
										<li class="list-group-item d-flex pb-0 mb-0">
											<span class="h6 fw-normal mb-0"><i class="bi bi-check-circle me-2"></i>600Kms included. After that $15/Kms</span>
										</li>
										<li class="list-group-item d-flex pb-0 mb-0">
											<span class="h6 fw-normal mb-0"><i class="bi bi-check-circle me-2"></i>4X4 </span>
										</li>
										<li class="list-group-item d-flex pb-0 mb-0">
											<span class="h6 fw-normal mb-0"><i class="bi bi-check-circle me-2"></i>ბენზინი</span>
										</li>
									</ul>
								</div>
							</div>
						</div>	
					

						<div class="card-footer p-0 pt-4">
							<div class="hstack gap-3 flex-wrap">
							
								<h6 class="bg-success bg-opacity-10 text-success fw-light rounded-2 d-inline-block mb-0 py-2 px-4">
									ულიმიტო გარბენი
								</h6>
			
						
								<h6 class="bg-success bg-opacity-10 text-success fw-light rounded-2 d-inline-block mb-0 py-2 px-4">
									მიწოდება 45 წუთში
								</h6>
                                <h6 class="bg-success bg-opacity-10 text-success fw-light rounded-2 d-inline-block mb-0 py-2 px-4">
									ხანგძლივობა 4 დღე
								</h6>
							</div>
						</div>




                        <!-- -->
                        <div class="row g-4" style="margin-top:20px;">

								<div class="col-lg-6">
									<div class="bg-light py-3 px-4 rounded-3">
										<h6 class="fw-light small mb-1">გასვლა</h6>
										<h5 class="mb-1">2024/02/12</h5>
										<small><i class="bi bi-alarm me-1"></i>12:30 </small>
									</div>
								</div>

							
								<div class="col-lg-6">
									<div class="bg-light py-3 px-4 rounded-3">
										<h6 class="fw-light small mb-1">დატოვება</h6>
										<h5 class="mb-1">2024/02/12</h5>
										<small><i class="bi bi-alarm me-1"></i>4:30</small>
									</div>
								</div>

					
								<!-- <div class="col-lg-4">
									<div class="bg-light py-3 px-4 rounded-3">
										<h6 class="fw-light small mb-1">Rooms &amp; Guests</h6>
										<h5 class="mb-1">2 G - 1 R</h5>
										<small><i class="bi bi-brightness-high me-1"></i>3 Nights - 4 Days</small>
									</div>
								</div> -->
							</div>

                        <!-- .... -->


                        <div class="row" style="margin-top:30px;">
					
					<div class="col-md-6">
						<div class="d-flex">

						<style>

							.car-user-page{
								padding: 60px 10px;
border-radius: 20px;
								box-shadow: 2px 2px 10px 0px #00000026;

							}
							.pickupes {
								margin-right: 15px;
								width: 15%;
							}
							.pickupes h4 {
								font-size: 15px;
							}
							.pickupes p {
								font-size: 13px;
							}
							.search-inputes {
								width: 100%;
								margin-right: 15px;
							}
							.search-inputes input {
								margin-bottom: 20px;
								border-radius: 20px;border: 1px solid #D1D1D1
							}
							.search-pickups-infos {
								width: 25%;
								text-align: center;
							}
						</style>
						
						<div class="search-inputes">
                            <p>მიწოდების მისამართი: ბათუმი მისამართი</p>
                            <p>დატოვების მისამართი: ბათუმი მისამართი</p>
							
						</div>
					
					</div>
					</div>
					<div class="col-md-6">
						<div class="d-flex">
							<div>
								<img style="width: 85px;margin-right: 30px;" src="https://tripbox.phpweb.ge/assets/images/no-photo-avatar.png">
							</div>
							<div style="padding-top: 0px;">
                            <p style="margin-bottom:0px;">ინფორმაცია კლიენტზე</p>
								<h5>სახელი გვარი </h5>
								<p style="margin-bottom: 0px;color:#444;"><a href="" style="color:#444;"> +995 555 55 55 55</a></p>
                                <p><a href="" style="color:#444;">info@mail.ge</a></p>
							</div>
						</div>
					</div>
				</div>


                <!-- -->
					</div>


<!-- ... cars -->

</div>
<div class="col-md-4">

<div class="card shadow rounded-2" style="    margin-top: 27px;    margin-bottom: 20px;">
					
							<div class="card-header border-bottom">
								<h5 class="card-title mb-0">ფინანსური ინფორმაცია</h5>
							</div>
	
						
							<div class="card-body">
								<ul class="list-group list-group-borderless">
									<li class="list-group-item d-flex justify-content-between align-items-center">
										<span class="h6 fw-light mb-0">ავტომობილი 15 დღით</span>
										<span class="fs-5">424$</span>
									</li>
									
									<li class="list-group-item d-flex justify-content-between align-items-center">
										<span class="h6 fw-light mb-0">მიწოდება / ბათუმი - თბილისი</span>
										<span class="fs-5">$20</span>
									</li>

                                    <li class="list-group-item d-flex justify-content-between align-items-center">
										<span class="h6 fw-light mb-0">ფასდაკლება<span class="badge text-bg-danger smaller mb-0 ms-2">10% </span></span>
										<span class="fs-5 text-success">-$2,560</span>	
									</li>


									<li class="list-group-item d-flex justify-content-between align-items-center">
										<span class="h6 fw-light mb-0">ეხლა გადასახდელი</span>
										<span class="fs-5">$350</span>
									</li>
								</ul>
							</div>
	
							<div class="card-footer border-top">
								<div class="d-flex justify-content-between align-items-center">
									<span class="h5 mb-0">სულ თანხა</span>
									<span class="h5 mb-0">$22,500</span>
								</div>
							</div>
						</div>


                        <a href="" class="btn btn-sm btn-primary mb-0" style="    background-color: #d6293d;border:0;">უარყოფა</a>
                        <a href="" class="btn btn-sm btn-primary mb-0" style="    background-color: #78BC61;border:0;">დათანხმება</a>
                    

</div>        
</div>        

                  
                    <!-- ... serach bar -->
                </div>








            </div>

        </div>
    </div>
</div>

@endpush