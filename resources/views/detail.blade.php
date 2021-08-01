@extends('layouts.temp')

@section('title','Detail Parking')
@section('content')
                <!-- Main Content -->
        <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Detail</h1>
          </div>

          <div class="section-body">
            <div class="card">

              <div class="card-header">
                <h4>Detail Parking</h4>
              </div>
              <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="id"><h6>ID</h6></label>
                                <h6>{{$parkir->id}}</h6>
                            </div>

                            <div class="form-group">
                                <label for="image"><h6>Gambar</h6></label><br>
                                <img src="{{url('assets/images/parking/'.$parkir->image)}}" alt="image" title="Gambar Kendaraan" width="200 px">
                            </div>


                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="plat_no"><h6>Plat Nomor</h6></label>
                                <h6>{{$parkir->plat_no}}</h6>
                            </div>
                            <div class="form-group">
                                <label for="j_kend"><h6>Jenis Kendaraan</h6></label>
                                <h6>{{$parkir->j_kend}}</h6>
                            </div>
                            <div class="form-group">
                                <label for="created_at"><h6>Mulai Parkir</h6></label>
                                <h6>{{$parkir->created_at}}</h6>
                            </div>
                            <div class="form-group">
                                <label for="biaya"><h6>Biaya</h6></label>
                                <h6>@switch($parkir->id)
                                    @case($parkir->biaya === '1-2 Jam')
                                            Rp. 2.000,-
                                        @break
                                    @case($parkir->biaya === '3-4 Jam')
                                            Rp. 4.000,-
                                        @break
                                    @case($parkir->biaya === '5-6 Jam')
                                            Rp. 6.000,-
                                        @break
                                    @case($parkir->biaya === '7-8 Jam')
                                            Rp. 8.000,-
                                        @break
                                    @case($parkir->biaya === '9-10 Jam')
                                            Rp. 10.000,-
                                        @break
                                    @case($parkir->biaya === '10 Jam++')
                                            Rp. 100.000,-
                                        @break
                                    @default
                                    -

                                @endswitch</h6>
                            </div>
                        </div>
                    </div>
                <button type="button" class="btn btn-primary btn-md text-light" onclick="history.back(-1)"> < Back</button>
                <div style="float: right;">
                    <form action="{{route('parkir.destroy', $parkir->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-md text-light"><i class="fas fa-times"></i> Hapus</button>
                        <a type="button" class="btn btn-success btn-md text-light" href="{{route('parkir.edit',$parkir->id)}}"><i class="far fa-edit"></i> Edit</a>
                    <a href="/parkir/{{$parkir->id}}/cetak_pdf" type="button" class="btn btn-warning btn-md text-light"><i class="far fa-file-alt"></i> Cetak</a><br><br>
                    </form>
                </div>
            </div>
          </div>
        </section>
        </div>
@endsection
