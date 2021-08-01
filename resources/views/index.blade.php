@extends('layouts.temp')

@section('title','Dashboard-List')
@section('content')
                <!-- Main Content -->
                <div class="main-content">
                    <section class="section">
                        <div class="section-header">
                            <div class="col-12">
                                <div class="card">
                                <div class="card-header">
                                    <h4>Parking List</h4><br>
                                                                
                                </div>
                                <div class="row"> 
                                    <div class="col-6">
                                        <a href="{{url('parkir/create')}}" class="btn btn-success mr-auto">+ New</a><br></div>
                                        <!-- Start kode untuk form pencarian -->
                                    <div class="col-6 ms-auto">
                                        <form class="form" method="get" action="{{ route('search') }}" role="search">
                                            <div class="input-group mb-3">
                                                <select class="form-control mr-3" id="search" name="search" id="search" disabled>
                                                    <option selected="selected">Semua</option>
                                                    <option>Sepeda Motor</option>
                                                    <option>Mobil</option>
                                                </select>
                                                <input type="search" name="search" class="form-control d-inline" id="search" placeholder="Search">
                                                <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
                                            </div>
                                        </form>
                                        
                                        <!-- Start kode untuk form pencarian -->
                                    </div>
                                </div>
                                @if ($message = Session::get('success'))
                                    <div class="alert alert-success">
                                        <p>{{ $message }}</p>
                                    </div>
                                    @endif
                                <div class="card-body">

                                    <div class="table-responsive">
                                    <table class="table table-bordered table-md">
                                        <tr>
                                        <th>ID</th>
                                        <th>Plat Nomor</th>
                                        <th>Jenis Kendaraan</th>
                                        <th>Masuk</th>
                                        <th>Action</th>
                                        </tr>
                                        @foreach ($parkir as $data)
                                        <tr>
                                        <td>{{$data->id}}</td>
                                        <td>{{$data->plat_no}}</td>
                                        <td>{{$data->j_kend}}</td>
                                        <td>{{$data->created_at}}</td>
                                        <td><a href="{{route('parkir.show',$data->id)}}" class="btn btn-success">Detail</a></td>
                                        </tr>
                                        @endforeach

                                    </table>
                                    </div>

                                </div>

                                </div>
                            </div>
                        </div>
                    </section>
                </div>

@endsection
