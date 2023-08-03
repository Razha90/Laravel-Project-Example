<!DOCTYPE html>
<html>
<head>
    <title>sangcahaya.id</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                
                <div class="table-responsive">
                    <table class="table table-hover">
                    <thead>
    <tr>
        <th>Action</th>
        <th>Nama</th>
        <th>NISN</th>
        <th>No HP</th>
        <th>Email</th>
        <th>Alamat</th>
        <th>Created At</th>
        <th>Updated At</th>
    </tr>
</thead>
<tbody>
    @foreach($data as $dt)
    <tr>
        <td>
            <a href="{{ url('siswa/'.$dt->id) }}">Edit</a> | 
            <form method="post" action="{{ url('siswa/'.$dt->id) }}">
                @csrf
                {{ method_field('delete') }}
    <button type="submit" class="btn-hapus">Hapus</button>
</form>
        </td>
        <td>{{$dt->nama}}</td>
        <td>{{$dt->nisn}}</td>
        <td>{{$dt->no_hp}}</td>
        <td>{{$dt->email}}</td>
        <td>{{$dt->alamat}}</td>
        <td>{{$dt->created_at}}</td>
        <td>{{$dt->updated_at}}</td>
    </tr>
    @endforeach
</tbody>
                    </table>
        
                    <div class="pagination">
    @if ($data->onFirstPage())
        <span>&nbsp;&nbsp;&nbsp;&laquo; Previous&nbsp;&nbsp;&nbsp;</span>
    @else
        <a href="{{ $data->previousPageUrl() }}" rel="prev">&nbsp;&nbsp;&nbsp;&laquo; Previous&nbsp;&nbsp;&nbsp;</a>
    @endif

    @foreach ($data->getUrlRange(1, $data->lastPage()) as $page => $url)
        @if ($page == $data->currentPage())
            <span>&nbsp;&nbsp;&nbsp;{{ $page }}&nbsp;&nbsp;&nbsp;</span>
        @else
            <a href="{{ $url }}">&nbsp;&nbsp;&nbsp;{{ $page }}&nbsp;&nbsp;&nbsp;</a>
        @endif
    @endforeach

    @if ($data->hasMorePages())
        <a href="{{ $data->nextPageUrl() }}" rel="next">&nbsp;&nbsp;&nbsp;Next &raquo;&nbsp;&nbsp;&nbsp;</a>
    @else
        <span>&nbsp;&nbsp;&nbsp;Next &raquo;&nbsp;&nbsp;&nbsp;</span>
    @endif
</div>
                </div>

            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        $('.btn-hapus').click(function(e){
              var result = confirm("Yakin Hapus?");
              if (result) {
                      
              }else{
                    e.preventDefault();
              }
        })
    })
</script>
</body>
</html>