@extends('main')

@section('css')
<style>
.toast-akumauweb {
background-color: #e10603 !important;
color: #fff !important;
}

.toast-register{
background-color: #09885c !important;
color: #fff !important;
}


.content {
    
background-image: url('https://demo.topupku.id/cdn/image/bg-auth.webp');
box-shadow: inset 900px 50px 1000px 35px var(--warna_1);
background-repeat: no-repeat;
background-size: cover;
background-position: center;
}



.section{
box-shadow: inset 0 234 0 10px rgba(0, 0, 0, 0.5);
}


.password-toggle-icon {
  position: absolute;
  top: 50%;
  right: 15px;
  transform: translateY(-50%);
  cursor: pointer;
  color:black;
}

.g-recaptcha{
    width:80%;
    border-radius:40%;
}


</style>

@endsection

@section('content')
<div class="content">
    <div class="container pt-5">
    	<div class="row justify-content-start">
		    <div class="col-lg-5  mt-2">
		        <div class="pb-3">
		            <a class="relative w-auto" href="{{ url('') }}">
		            <img src="{{!$config ? '' : $config->og_image}}" class="h-11 w-auto">
		            </a>
		            <div class="section shadow-5  p-3 akumauweb-rounded-sedang" style="margin-top: 5%;">
		                <div class="card-header ">
		                    <h1 class="font-semibold text-[24px] md:text-[28px] lg:text-[32px] leading-[150%] tracking-[0.3px] mt-5">Lupa Kata Sandi</h1>
                            <p class="text-md mt-3 mb-2" style="color: rgb(203, 203, 203);">Masukkan Nomor WhatsApp yang terdaftar.</p>
                            <!--<b><h1 class="card-title">Lupa Password</h1>-->
                            <hr>
                        </div>
		                <div class="card-body ">
		                   @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                            @endif

                            @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                            @endif
                              
                        	<form role="form" action="{{ url('/forgot-password') }}" method="POST">
		                        @csrf		                        <div class="form-group mb-2">
		                            <div class="form-group has-feedback">
		                          <input type="number" id="nomor" name="phone" class="form-control input-lg rounded-pill py-3 my-4" required autocomplete="off" placeholder="Contoh: 62821xxxxxx">
                                  <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                </div>
		                        </div>
                                  </div>
                                </div>
		                           <div class="text-center my-1">
		                                <button type="submit" name="tombol" value="submit" class="btn btn-primary rounded-pill px-4 py-3 w-100">Submit</button>
		                            </div>
		                    </form>
		                    <p class="mt-10 lg:text-start md:text-start text-center" style="margin-bottom: 50%">© 2023 {{ENV('APP_NAME')}}. Semua Hak Cipta</p>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
    </div>
    </div>
		    
@endsection