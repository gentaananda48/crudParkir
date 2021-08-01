
<html>
<head>
    
    <title>Cetak PDF</title>
 
</head>
<body>
    @foreach ($parkir as $item)
        
    
    <div class="card">

        <div class="card-header">
          <h4>Detail Parking</h4>
        </div>
        <div class="card-body">
              <div class="row">
                  <div class="col">
                      <div class="form-group">
                          <label for="id"><h6>ID</h6></label>
                          <h3>{{$item->id}}</h3>
                      </div>



                  </div>
                  <div class="col">
                      <div class="form-group">
                          <label for="plat_no"><h6>Plat Nomor</h6></label>
                          <h3>{{$item->plat_no}}</h3>
                      </div>
                      <div class="form-group">
                          <label for="j_kend"><h6>Jenis Kendaraan</h6></label>
                          <h3>{{$item->j_kend}}</h3>
                      </div>
                      {{-- <div class="form-group">
                          <label for="created_at"><h6>Mulai Parkir</h6></label>
                          <h6>{{$item->created_at}}</h6>
                      </div> --}}
                      <div class="form-group">
                          <label for="biaya"><h6>Biaya</h6></label>
                          <h3>@switch($item->id)
                              @case($item->biaya === '1-2 Jam')
                                      Rp. 2.000,-
                                  @break
                              @case($item->biaya === '3-4 Jam')
                                      Rp. 4.000,-
                                  @break
                              @case($item->biaya === '5-6 Jam')
                                      Rp. 6.000,-
                                  @break
                              @case($item->biaya === '7-8 Jam')
                                      Rp. 8.000,-
                                  @break
                              @case($item->biaya === '9-10 Jam')
                                      Rp. 10.000,-
                                  @break
                              @case($item->biaya === '10 Jam++')
                                      Rp. 100.000,-
                                  @break
                              @default
                              -

                          @endswitch</h3>
                      </div>
                  </div>
              </div>
          
      </div>
    </div>
    @endforeach
</body>
</html>