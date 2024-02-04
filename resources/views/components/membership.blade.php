@extends('../main')

@section('css')


<style>
    .form-check-input:focus {
        border-color: #fe6c17;
        box-shadow: 0 0 0 0.25rem rgb(13 110 253 / 25%);
        outline: 0;
    }

    .form-check-input:checked {
        background-color: #fe6c17;
        border-color: #fe6c17;
    }

    .btn-primary {
        background-color: #3571e2;
        border-color: #3571e2;
        cursor: pointer;
        color: #fff;
    }

    .btn-primary:hover {
        color: #fff;
        background-color: #3571e2;
        border-color: #3571e2;
    }

    .btn-primary:focus,
    .btn-primary.focus {
        color: #fff;
        background-color: #3571e2;
        border-color: #3571e2;
        box-shadow: 0 0 0 0.2rem rgba(255, 168, 38, 0.5);
    }

    #searchProds {
        width: 60px;
        transition: width .5s ease
    }

    #searchProds:focus {
        width: 240px
    }
</style>
@endsection


@section('content')
@include('../navbar')
<div class="wrapper pt-4">
    <br>
  <div class="container">
    <div class="row">
      <div class="col-lg-6 mx-auto mb-5">
        <div class="card bg-dark shadow akumauweb-rounded-sedang">
          <div class="card-header akumauweb-rounded-sedang  bg-akumauweb">
            <h5 class="card-title text-white mt-2"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i> Upgrade Membership</h5>
          </div>
          <div class="card-body">
                <div class="row px-4 mt-4">
						<span class="d-inline-block py-1 px-2 mb-2 rounded text-dark" style="font-size: 14px; background-color: #fff;">Platinum : {{ !$config ? '' : $config->harga_platinum }},-</span>
						<span class="d-inline-block py-1 px-2 mb-2 rounded text-dark" style="font-size: 14px; background-color: var(--warna_5);">Gold : {{ !$config ? '' : $config->harga_gold }},-</span>
						<a href="{{ !$config ? '' : $config->url_wa }}" type="button" class="btn btn-primary mt-2 w-100" type="button"><i class="fa fa-whatsapp"></i> Beli Membership</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>





@include('../footer')
@section('js')

<script>
			var modal_logout = new bootstrap.Modal(document.getElementById('modal-logout'));

			function logout() {
				modal_logout.show();
			}
		</script>
		

@endsection




@endsection