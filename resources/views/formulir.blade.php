@extends('layouts.master')

@section('content')
<section>
<div class="card">
  <div class="container">
    <h2 class="alert alert-primary text-center mt-3">FORM PENDAFTARAN MAGANG/PKL</h2>
    <form>
      <div class="form-group mt-3">
          <label>Nama Legkap</label>
        <div class="col-sm-6">
          <input type="text" name="" class="form-control" placeholder="Jawaban Anda">
        </div> 
      </div>

      <div class="form-group mt-3">
          <label>NIM (Nomor Induk Mahasiswa)</label>
        <div class="col-sm-6">
          <input type="text" name="" class="form-control" placeholder="Jawaban Anda">
        </div> 
      </div>

      <div class="form-group mt-3">
          <label>Email</label>
        <div class="col-sm-6">
          <input type="text" name="" class="form-control" placeholder="Jawaban Anda">
        </div> 
      </div>

      <div class="form-group mt-3">
          <label>Tempat Lahir</label>
        <div class="col-sm-6">
          <input type="text" name="" class="form-control" placeholder="Jawaban Anda">
        </div>  
      </div>

      <div class="form-group mt-3">
          <label>Tanggal Lahir</label>
        <div class="col-sm-6">
          <input type="date" name="" class="form-control">
        </div>  
      </div>

      <div class="form-group mt-3">
          <label>No. HP Aktif yang bisa dihubungi dan chat WA</label>
        <div class="col-sm-6">
          <input type="text" name="" class="form-control" placeholder="Jawaban Anda">
        </div> 
      </div>

      <div class="form-group mt-3">
          <label>Asal Sekolah/Kampus</label>
        <div class="col-sm-6">
          <input type="text" name="" class="form-control" placeholder="Jawaban Anda">
        </div> 
      </div>

      <div class="form-group mt-3">
          <label>Program Studi</label>
        <div class="col-sm-6">
          <input type="text" name="" class="form-control" placeholder="Jawaban Anda">
        </div> 
      </div>

      <div class="form-group mt-3">
          <label>Nama Kota/Daerah tempat tinggal Anda saat ini</label>
        <div class="col-sm-6">
          <input type="text" name="" class="form-control" placeholder="Jawaban Anda">
        </div> 
      </div>

      <div class="form-group mt-3">
        <label>Jenis Kelamin</label>
        <div class="from-check">
          <input type="radio" class="form-check-input" name="radio1" id="radio2">
          <label>Laki-Laki</label>
        </div>

        <div class="from-check">
          <input type="radio" class="form-check-input" name="radio1" id="radio2">
          <label>Perempuan</label>
        </div>
      </div>

      <div class="form-group mt-3">
        <label class="col-sm-2 col-form-label">Pilih Divisi</label>
          <div class="col-sm-6">
            <select class="form-select" aria-label="Default select example">
              <option>1. Programmer(Frontend/Backend)</option>
              <option>2. UI/UX Designer</option>
              <option>3. Editor Foto & Vidio</option>
              <option>4. Content Creative/Desainer Grafis</option>
            </select>
          </div>
      </div>

      <div class="from-group mt-3">
        <label>Silakan upload : CV, Scan KTP/KTM, dan Surat Pengantar dr kampus disini. Format pdf</label>
        <br>
        <input type="file" class="form-control-file" name="">
      </div>

      <div class="from-group mt-4">
        <button type="submit" class="btn btn-primary">SIMPAN</button>
        <button type="reset" class="btn btn-danger">RESET</button>
      </div>  

    </form>
  </div>
</div>
</div>

</section>
@endsection