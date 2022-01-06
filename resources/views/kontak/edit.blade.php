@extends('template')
@section('content')
<div class="container">

<div class="card o-hidden border-0 shadow-lg my-5">
  <div class="card-body p-0">
    <!-- Nested Row within Card Body -->
    <div class="row">
      <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
      <div class="col-lg-7">
        <div class="p-5">
          <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4">Ubah Data Pribadi</h1>
            <hr/>
            @if($errors->any())
                <div class="alert-danger">
                @foreach($errors->all() as $error)
                    <li><strong>{{ $error }}</strong></li>
                @endforeach
                </div>
            @endif 
          </div>

                @foreach($data as $datas)
                <form action="{{ route('kontak.update', $datas->id) }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" name="password" value="{{ $datas->password }}">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ $datas->email }}">
                    </div>
                    <div class="form-group">
                        <label for="nama">Pendidikan Terakir:</label>
                        <input type="text" class="form-control" id="pendidikan_terakhir" name="pendidikan_terakhir" value="{{ $datas->pendidikan_terakhir }}">
                    </div>
                    <div class="form-group">
                        <label for="nohp">Riwayat Pelatihan:</label>
                        <input type="text" class="form-control" id="riwayat_pelatihan" name="riwayat_pelatihan" value="{{ $datas->riwayat_pelatihan }}">
                    </div>
                    <div class="form-group">
                        <label for="nohp">Riwayat Pekerjaan:</label>
                        <input type="text" class="form-control" id="riwayat_pekerjaan" name="riwayat_pekerjaan" value="{{ $datas->riwayat_pekerjaan }}">
                    </div>
                    <button type="submit" class="btn btn-google btn-user btn-block">Submit</button>
                
                
              </form>
              @endforeach
              <hr>
              
              
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  @endsection