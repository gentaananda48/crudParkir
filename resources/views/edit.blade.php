@extends('layouts.temp')
@section('title', 'Edit Parking')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
        <h1>Edit Parking</h1>
        </div>
        <div class="section-body">
            <div class="card">
                <div class="card-header">
                <h4>Form Edit Parking</h4>
                </div>
                    <form method="POST" action="{{route('parkir.update', $parkir->id)}}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row justify-content-md-center">
                            <div class="col-5">
                                <div class="form-group">
                                    <label>Plat Nomor</label>
                                    <input type="text" class="form-control" value="{{$parkir->plat_no}}" name="plat_no" required>
                                </div>
                                <div class="form-group">
                                    <label>Jenis Kendaraan</label>
                                    <select class="form-control" name="j_kend">
                                        <option>Sepeda Motor</option>
                                        <option>Mobil</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Biaya</label>
                                    <select class="form-control" name="biaya">
                                        <option>1-2 Jam</option>
                                        <option>3-4 Jam</option>
                                        <option>5-6 Jam</option>
                                        <option>7-8 Jam</option>
                                        <option>9-10 Jam</option>
                                        <option>10 Jam++</option>
                                    </select>
                                </div>

                                <div style="float: right;">
                                    <button type="button" class="btn btn-primary btn-md text-light"onclick="history.back(-1)">Back</button>
                                    <button type="submit" class="btn btn-success btn-md text-light"><i class="fas fa-check"></i> Simpan</button><br><br>
                                </div>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </section>
</div>
@endsection
