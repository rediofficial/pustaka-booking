<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <?= $this->session->flashdata('pesan'); ?>

            <!-- form bisa pakai template ci juga, karena ci juga menyediakan form -->
            <!-- dokumentasi ci bisa dilihat secara offline di base_url()/user_guide -->
            <!-- form helper = echo form_open('email/send'); ini sama seperti nulis tag form -->



            <div class="form-group">

                <div class="card">
                    <div class="card-header">
                        Form Tambah Data Mahasiswa
                    </div>
                    <div class="card-body">

                        <!-- menampilkan pesan eror validasi ci -->

                        <form action="<?= base_url('mahasiswa/tambah'); ?>" method="post">

                            <label for="nama_mhs">Nama</label>
                            <input type="text" class="form-control" id="nama_mhs" name="nama_mhs" placeholder="Nama Lengkap">

                            <!-- required itu html yang menjalankan jadi tidak semua browser support, kita bisa pakai modul ci yaitu form validation supaya ci saja yang menjalankan requirednya, type email juga bisa dicek -->

                            <label for="nis">NIS</label>
                            <input type="text" class="form-control" id="nis" name="nis" placeholder="12210970">

                            <label for="kelas">Kelas</label>
                            <input type="text" class="form-control" id="kelas" name="kelas" placeholder="12.3A.35">

                            <label for="tanggal_lahir">Tanggal Lahir :</label><br>
                            <input class="form-control" id="tanggal_lahir" type="date" name="tanggal_lahir" /><br>

                            <label for="alamat_kantor">Alamat<sup class="text-danger">*</sup></label>
                            <textarea name="alamat" class="form-control" id="alamat" rows="3"></textarea>

                            <label>Jenis Kelamin :</label>
                            <div class="mt-1 mb-4">
                                <input type="radio" id="jenis_kelamin" name="jenis_kelamin" value="Laki-laki" required> Laki-Laki </input>
                                <input type="radio" id="jenis_kelamin" name="jenis_kelamin" value="Perempuan" required> Perempuan </input>
                            </div>
                            <div class="form-group">
                                <label for="agama">Agama</label>
                                <select class="form-control" id="agama" name="agama">
                                    <option selected>Pilih Agama</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Katolik">Katolik</option>
                                    <option value="Buddha">Buddha</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Protestan">Protestan</option>
                                    <option value="Khonghucu">Khonghucu</option>
                                </select>
                            </div>
                            <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                        </form>
                    </div>
                </div>


            </div>



        </div>
    </div>
</div>