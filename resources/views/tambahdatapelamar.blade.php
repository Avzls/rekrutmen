
<x-app-layout>
    @include('template.header')
    <x-slot name="header">
    </x-slot>
    @include('template.sidebar')
</x-app-layout>
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
        <i class="bi bi-justify fs-3"></i>
        </a>
    </header>
    <form action="{{ url('/tambahdatapelamar') }}" method="POST">
        @csrf
       
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Tambah Data Pelamar</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="basicInput">Nama</label>
                                <input type="text" class="form-control" name="nama" placeholder="Enter email" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="helperText">NIK</label>
                                <input type="number" id="helperText" class="form-control" placeholder="NIK" name="nik" required>
                            </div>

                            <div class="form-group">
                                <label for="helpInputTop">Email</label>
                                <small class="text-muted">eg.<i>someone@example.com</i></small>
                                <input type="email" class="form-control" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="basicInput">Alamat</label>
                                <input type="text" class="form-control" name="alamat" placeholder="Jl.Ahmad Yani No.10" required>
                            </div>
                            <div class="form-group">
                                <label for="basicInput">Kelurahan</label>
                                <input type="text" class="form-control" name="kelurahan" placeholder="Sumur Pecung" required>
                            </div>
                            <div class="form-group">
                                <label for="basicInput">Kecamatan</label>
                                <input type="text" class="form-control" name="kecamatan" placeholder="Serang" required>
                            </div>
                            <div class="form-group">
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Pas Foto</label>
                                    <input class="form-control" type="file" id="formFile" name="pasfoto" required>
                                  </div>
                            </div>
                            <div class="form-group">
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">KTP</label>
                                    <input class="form-control" type="file" id="formFile" name="ktp" required>
                                  </div>
                            </div>
                            <div class="form-group">
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Ijazah</label>
                                    <input class="form-control" type="file" id="formFile" name="ijazah" required>
                                  </div>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="helperText">Jenis Kelamin</label>
                                    <select class="form-select" name="jk" required>
                                        <option></option>
                                        <option>Laki-Laki</option>
                                        <option>Perempuan</option>
                                    </select>
                                </div>
                            <div>
                            <div class="form-group">
                                    <label for="basicInput">No HP</label>
                                    <input type="number" class="form-control" id="basicInput" name="nohp"
                                        placeholder="No HP" required>
                            </div>
                            <div class="form-group">
                                <label for="basicInput">Agama</label>
                                <input type="text" class="form-control" name="agama"
                                    placeholder="Agama" required>
                            </div>
                            <div class="form-group">
                                <label for="basicInput">Kota</label>
                                <input type="text" class="form-control" name="kota"
                                    placeholder="Serang" required>
                            </div>
                            <div class="form-group">
                                <label for="basicInput">Provinsi</label>
                                <input type="text" class="form-control" name="provinsi"
                                    placeholder="Banten" required>
                            </div>
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="helperText">Pendidikan</label>
                                    <select class="form-select" name="pendidikan" required>
                                        <option></option>
                                        <option>SMP</option>
                                        <option>SMA</option>
                                        <option>D3</option>
                                        <option>S1</option>
                                        <option>S2</option>
                                        <option>S3</option>
                                    </select>
                                </div>
                            <div>
                                <div class="form-group">
                                  <div class="mb-3">
                                    <label for="formFile" class="form-label">Transkip Nilai</label>
                                    <small class="text-muted"><i>Jika ijazah belum terbit</i></small>
                                    <input class="form-control" type="file" id="formFile" name="transkip">
                                  </div>
                                </div>
                            
                                <div class="form-group">
                                  <div class="mb-3">
                                    <label for="formFile" class="form-label">Sertifikat Pendukung</label>
                                    <input class="form-control" type="file" id="formFile" name="sertifikatpendukung">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <div class="mb-3">
                                    <label for="formFile" class="form-label">Dokumen Lainnya</label>
                                    <input class="form-control" type="file" id="formFile" name="dokumenlainnya">
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                 </div>
            </div>
             <div class="d-grid gap-2">
                <input type="submit" value="Kirim" class="btn icon icon-left btn-primary">
            </div>
         
        </section>
      
    </form>


    @include('template.footer')
</div>

</div>
</div>