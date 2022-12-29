<!-- Nama Makul Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama_makul', 'Nama Makul:') !!}
    {!! Form::text('nama_makul', null, ['class' => 'form-control']) !!}
</div>

<!-- Nama Dosen Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama_dosen', 'Nama Dosen:') !!}
    {!! Form::text('nama_dosen', null, ['class' => 'form-control']) !!}
</div>

<!-- Jumlah Mahasiswa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jumlah_mahasiswa', 'Jumlah Mahasiswa:') !!}
    {!! Form::number('jumlah_mahasiswa', null, ['class' => 'form-control']) !!}
</div>

<!-- Sks Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sks', 'Sks:') !!}
    {!! Form::number('sks', null, ['class' => 'form-control']) !!}
</div>

<!-- Ruangan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ruangan', 'Ruangan:') !!}
    {!! Form::text('ruangan', null, ['class' => 'form-control']) !!}
</div>