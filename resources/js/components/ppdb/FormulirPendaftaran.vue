<template>
  <div>
    <header>
      <h3 class="center-align">Pendaftaran Online</h3>
    </header>
    <!-- <div class="container"> -->
    <p>
      Keterangan:
      <a class="modal-trigger" href="#modal1">
        <span class="red-text">*Wajib diisi</span>
        Mohon dibaca terlebih dahulu
      </a>
    </p>
    <!-- Moda, structure -->
    <div id="modal1" class="modal">
      <div class="modal-content">
        <h4>Baca peraturan pengisian dengan teliti</h4>
        <!-- <p>A bunch of text</p> -->
        <ol>
          <li>Setiap Formulir inputan harus diisi</li>
          <li>Isilah dengan tanda (-) jika tidak ada data yang harus diisi</li>
          <li>Untuk form tangal lahir (Orang tua dan wali) jika tidak ada data, diabaikan saja</li>
          <li>Untuk form pilih data (Orangtua dan Wali); jika tidak ada data, diabaikan saja</li>
          <li>Isi formulir data dengan data yang sesusai dengan berkas yang akan dikirimkan</li>
          <li>File gambar ijasah haru berexsitensi .jpg, .jpeg, .png dan zip</li>
        </ol>
      </div>
      <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Mengerti</a>
      </div>
    </div>

    <form action="#" style="border:1px solid greey">
      <h5 class="card-title">
        <i class="material-icons">account_box</i> Informasi Pribadi
      </h5>
      <div>
        <label>
          <span class="red-text">*</span>Program Keahlian / Jurusan
        </label>
        <select class="browser-default">
          <option value disabled selected>Pilih Jurusan</option>
          <option value="1">Teknik Komputer dan Jaringan (TKJ)</option>
          <option value="2">Teknik Kendaraan Ringan (TKR)</option>
          <option value="3">Teknik Sepeda Motor (TSM)</option>
          <option value="4">Administrasi Perkantoran</option>
          <option value="5">Akuntansi</option>
        </select>
      </div>

      <div class="row">
        <div class="input-field col s12 l6">
          <input type="text" name="nama" id="nama" />
          <label for="nama">
            <span class="red-text">*</span>Nama Lengkap
          </label>
        </div>
        <div class="input-field col s12 l3">
          <input type="text" name="tpt-lahir" id="tpt-lahir" class="autocomplete" />
          <label for="tpt-lahir">
            <span class="red-text">*</span>Tempat Lahir
          </label>
        </div>
        <div class="input-field col s12 l3">
          <input type="text" name="tgl-lahir" id="tgl-lahir" />
          <label for="tgl-lahir">
            <span class="red-text">*</span>Tanggal Lahir
          </label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 l4">
          <select>
            <option value disabled selected>Pilih Jenis Kelamin</option>
            <option value="1">Laki-laki</option>
            <option value="2">Perempuan</option>
          </select>
          <label>
            <span class="red-text">*</span>Jenis Kelamain
          </label>
        </div>
        <div class="input-field col s12 l4">
          <select>
            <option value disabled selected>Pilih Agama</option>
            <option value="1">Islam</option>
            <option value="2">Katholik</option>
          </select>
          <label>Agama</label>
        </div>
        <div class="input-field col s12 l4">
          <select>
            <option value disabled selected>Pilih Kewarganegaraan</option>
            <option value="1">Indonesia</option>
            <option value="2">Australia</option>
          </select>
          <label>Kewarganegaraan</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 l12">
          <input type="text" name="hp" id />
          <label for="hp">No Handphone</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 l7">
          <input type="text" name="alamat" id />
          <label for="alamat">
            <span class="red-text">*</span>Alamat
          </label>
        </div>
        <div class="input-field col s6 l2">
          <input type="text" name="rt" id="rt" />
          <label for="rt">RT</label>
        </div>
        <div class="input-field col s6 l1 hide-on-med-and-down">
          <p class="center-align">/</p>
        </div>
        <div class="input-field col s6 l2">
          <input type="text" name="rw" id="rw" />
          <label for="rw">RW</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 l3">
          <select disabled>
            <option value disabled selected>Pilih Provinsi</option>
            <option value="1">Jawa Barat</option>
            <option value="2">Banten</option>
          </select>
          <label>Provinsi</label>
        </div>
        <div class="input-field col s12 l3">
          <select disabled>
            <option value disabled selected>Pilih Kabupaten</option>
            <option value="1">Bandung</option>
            <option value="2">Banten</option>
          </select>
          <label>Kabupaten</label>
        </div>
        <div class="input-field col s12 l3">
          <select disabled>
            <option value disabled selected>Pilih Kecamatan</option>
            <option value="1">Cimanggung</option>
            <option value="2">Jatinangor</option>
          </select>
          <label>Kecamatan</label>
        </div>
        <div class="input-field col s12 l3">
          <select disabled>
            <option value disabled selected>Pilih Desa</option>
            <option value="1">Sindangpakuon</option>
            <option value="2">Cisempur</option>
          </select>
          <label>Desa</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 l6">
          <select>
            <option value disabled selected>Tinggal Bersama</option>
            <option value="1">Orang tua</option>
            <option value="2">Wali</option>
            <option value="3">Pondok</option>
          </select>
          <label>
            <span class="red-text">*</span>Tinggal Bersama
          </label>
        </div>
        <div class="input-field col s12 l6">
          <select>
            <option value disabled selected>Pilih Asal Sekolah</option>
            <option value="1">SMPN Cimanggung</option>
            <option value="2">SMP PGRI</option>
          </select>
          <label>
            <span class="red-text">*</span>Asal Sekolah
          </label>
        </div>
      </div>
      <div class="progress">
        <div class="determinate" style="width: 35%"></div>
      </div>
      <div class="row">
        <div class="col s12 l12">
          <button type="submit" class="btn right">Berikutnya</button>
        </div>
      </div>
    </form>
    <!-- </div> -->
  </div>
</template>

<script>
export default {};
</script>

<style>
</style>