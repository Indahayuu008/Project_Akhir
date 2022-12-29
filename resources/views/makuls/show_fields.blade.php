<!-- Nama Makul Field -->
<div class="col-sm-12">
    {!! Form::label('nama_makul', 'Nama Makul:') !!}
    <p>{{ $makul->nama_makul }}</p>
</div>

<!-- Nama Dosen Field -->
<div class="col-sm-12">
    {!! Form::label('nama_dosen', 'Nama Dosen:') !!}
    <p>{{ $makul->nama_dosen }}</p>
</div>

<!-- Jumlah Mahasiswa Field -->
<div class="col-sm-12">
    {!! Form::label('jumlah_mahasiswa', 'Jumlah Mahasiswa:') !!}
    <p>{{ $makul->jumlah_mahasiswa }}</p>
</div>

<!-- Sks Field -->
<div class="col-sm-12">
    {!! Form::label('sks', 'Sks:') !!}
    <p>{{ $makul->sks }}</p>
</div>

<!-- Ruangan Field -->
<div class="col-sm-12">
    {!! Form::label('ruangan', 'Ruangan:') !!}
    <p>{{ $makul->ruangan }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $makul->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $makul->updated_at }}</p>
</div>

