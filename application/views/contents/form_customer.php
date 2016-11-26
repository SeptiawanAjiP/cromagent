<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Customer Registration
                <span class="tools pull-right">
                    <a class="fa fa-chevron-down" href="javascript:;"></a>
                    <a class="fa fa-cog" href="javascript:;"></a>
                    <a class="fa fa-times" href="javascript:;"></a>
                </span>
            </header>
            <div class="panel-body">
                <!-- batch bagiannya kak aji -->
                <h3>Batch Customer Registration</h3>
                <br>
                <br>
                <div class=" form">
                    <form method="post" action="#">
                        <p>Silahkan upload file excel sesuai format. Download format <a href="#">disini</a></p>
                        <label class="col-md-3">File</label>
                        <input type="file" name="batch_file" class="col-md-4">
                        <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                    </form>
                </div>
                <div style="width: 100%; background: black; height: 2px; margin-top: 2%; margin-bottom: 2%;"></div>
                <h3>Single Customer Registration</h3>
                <br>
                <br>
                <div class=" form">
                    <form method="post" action="#" class="cmxform form-horizontal " id="commentForm">
                    <div class="col-md-6">
                        <div class="form-group ">
                            <label class="control-label col-lg-3">NIK</label>
                            <div class="col-lg-3">
                                <input type="text" name="nik" class="input_text">
                            </div>
                        </div>
                        <div class="form-group ">
                            <label class="control-label col-lg-3">Nama</label>
                            <div class="col-lg-3">
                                <input type="text" name="nama_c" class="input_text">
                            </div>
                        </div>
                        <div class="form-group ">
                            <label class="control-label col-lg-3">Tempat Lahir</label>
                            <div class="col-lg-3">
                                <input type="text" name="tempatLahir" class="input_text">
                            </div>
                        </div>
                        <div class="form-group ">
                            <label class="control-label col-lg-3">Tanggal Lahir</label>
                            <div class="col-lg-3">
                                <input type="date" name="tglLahir" class="input_text" data-date-format="dd-mm-yyyy">
                            </div>
                        </div>
                        <div class="form-group ">
                            <label class="control-label col-lg-3">Provinsi</label>
                            <div class="col-lg-3">
                                <select class="input_text">
                                
                                </select>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label class="control-label col-lg-3">Kota</label>
                            <div class="col-lg-3">
                                <select class="input_text">
                                
                                </select>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label class="control-label col-lg-3">Kelurahan</label>
                            <div class="col-lg-3">
                                <select class="input_text">
                                
                                </select>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label class="control-label col-lg-3">Kecamatan</label>
                            <div class="col-lg-3">
                                <select class="input_text">
                                
                                </select>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label class="control-label col-lg-3">Kode Pos</label>
                            <div class="col-lg-3">
                                <input type="text" name="kode_pos_c" class="input_text">
                            </div>
                        </div>
                        <div class="form-group ">
                            <label class="control-label col-lg-3">RT</label>
                            <div class="col-lg-3">
                                <input type="text" name="rt" class="input_text">
                            </div>
                        </div>
                        <div class="form-group ">
                            <label class="control-label col-lg-3">RW</label>
                            <div class="col-lg-3">
                                <input type="text" name="rw" class="input_text">
                            </div>
                        </div>
                        <div class="form-group ">
                            <label class="control-label col-lg-3">Alamat Lengkap</label>
                            <div class="col-lg-3">
                                <input type="text" name="alamat_c" class="input_text">
                            </div>
                        </div>
                        <div class="form-group ">
                            <label class="control-label col-lg-3">Jenis Kelamin</label>
                            <div class="col-lg-6">
                                <input type="radio" name="jk" value="0">Laki-laki</input>
                                <input type="radio" name="jk" value="1">Perempuan</input>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group ">
                            <label class="control-label col-lg-3">Agama</label>
                            <div class="col-lg-3">
                                <select class="input_text" name="agama">
                                    <option>Islam</option>
                                    <option>Kristen</option>
                                    <option>Katolik</option>
                                    <option>Budha</option>
                                    <option>Hindu</option>
                                    <option>Konghuchu</option>
                                    <option>Lainnya</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label class="control-label col-lg-3">Status Pernikahan</label>
                            <div class="col-lg-3">
                                <select class="input_text" name="stat_kawin">
                                    <option value="1">Belum Menikah</option>
                                    <option value="2">Menikah</option>
                                    <option value="3">Cerai</option>
                                    <option value="4">Cerai Mati</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label class="control-label col-lg-3">Nomor Telefon/HP</label>
                            <div class="col-lg-3">
                                <input type="text" name="noTel_c" class="input_text">
                            </div>
                        </div>
                        <div class="form-group ">
                            <label class="control-label col-lg-3">Pekerjaan</label>
                            <div class="col-lg-3">
                                <select class="input_text" name="pekerjaan">
                                    <option value="0">PNS</option>
                                    <option value="1">Swasta</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label class="control-label col-lg-3">Range Pendapatan</label>
                            <div class="col-lg-3">
                                <select class="input_text" name="pendapatan">
                                    <option value="0">< 1.000.000</option>
                                    <option value="1">1.000.000 - 3.000.000</option>
                                    <option value="2">> 3.000.000 - 5.000.000</option>
                                    <option value="3">> 5.000.000</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label class="control-label col-lg-3">Jumlah Keluarga</label>
                            <div class="col-lg-3">
                                <input type="number" name="jml_klg" class="input_text">
                            </div>
                        </div>
                        <div class="form-group ">
                            <label class="control-label col-lg-3">Foto Pemilik</label>
                            <div class="col-lg-3">
                                <input type="file" name="foto_pemilik">
                            </div>
                            <div class="col-md-9" style="margin-top: 3px;">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;">
                                        <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="confirm_button col-sm-12">
                        <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                        <input type="reset" name="reset" value="Reset" class="btn btn-primary">
                    </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>