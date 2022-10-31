                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>NIS</th>
                                            <th>Kelas</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Tempat Lahir</th>
                                            <th>Agama</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($this->ModelSiswa->getSiswa() as $data) : ?>
                                            <tr>
                                                <td><?= $data["nama"]; ?></td>
                                                <td><?= $data["nis"]; ?></td>
                                                <td><?= $data["kelas"]; ?></td>
                                                <td><?= $data["tanggal_lahir"]; ?></td>
                                                <td><?= $data["alamat"]; ?></td>
                                                <td><?= $data["jenis_kelamin"]; ?></td>
                                                <td><?= $data["agama"]; ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>