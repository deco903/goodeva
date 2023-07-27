@extends('layouts.app')
@section('title','Edit Kru')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text" style="margin-bottom: 2em">
                        <h4>Edit Data Kru Kapal</h4>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <div class="card-body">
                        <form action="{{route('updateKru',$editkru->id )}}" method="POST" enctype="multipart/form-data"> 
                          @csrf
                          <input type="hidden" name="id" value="{{$editkru->id}}">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <div class="row">
                                        <div class="col-3">
                                            <img id="preview" src="{{url('uploads/img_kru/'. $editkru->photo)}}" alt="" style="width:100px;height:96px;margin-left:-16px;margin-right:10px;"/> 
                                        </div>
                                        <div class="col-3">
                                            <input type="file" id="myFile" name="photo">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Phone</label>
                                    <input type="number" name="phone" class="form-control" value="{{$editkru->phone}}" />
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Nama</label>
                                    <input type="text" name="nama" class="form-control" value="{{$editkru->nama}}" />
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" value="{{$editkru->email}}" />
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>Tempat Lahir</label>
                                            <input type="text" name="tempat_lahir" class="form-control" value="{{$editkru->tempat_lahir}}" />
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Tanggal Lahir</label>
                                            <div class="dateMounth">
                                                <input type="date" name="tgl_lahir" id="dateofbirth" class="dateTerm" value="{{$editkru->tgl_lahir}}"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>Nama Sertifikat</label>
                                            <input type="text" name="nama_sertifikat" class="form-control" value="{{$editkru->nama_sertifikat}}"/>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>No Sertifikat</label>
                                            <input type="number" name="no_sertifikat" class="form-control" value="{{$editkru->no_sertifikat}}" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Jenis Kelamin</label>
                                    <select name="jenis_kelamin" id="inputState" class="form-control">
                                        <option value="">{{$editkru->jenis_kelamin}}</option>
                                        <option value="perempuan">Perempuan</option>
                                        <option value="laki-laki">Laki - Laki</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>Bergabung Sejak</label>
                                            <div class="dateMounth">
                                                <input type="date" name="tgl_gabung" id="dateofbirth" class="dateTerm" value="{{$editkru->tgl_gabung}}" />
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Sign Off</label>
                                            <div class="dateMounth">
                                                <input type="date" name="sign_off" id="dateofbirth" class="dateTerm" value="{{$editkru->sign_off}}"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>Identitas</label>
                                           <input type="text" name="identitas" class="form-control" value="{{$editkru->identitas}}" />
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>No. Identitas</label>
                                            <input type="number" name="no_identitas" class="form-control" value="{{$editkru->no_identitas}}" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>No NPWP</label>
                                            <input type="number" name="npwp" class="form-control" value="{{$editkru->npwp}}"/>
                                        </div>
                                        <div class="form-group col-md-6">
                                        <label>Jabatan</label>
                                        <input type="text" name="jabatan" class="form-control" value="{{$editkru->jabatan}}"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Status Perkawinan</label>
                                    <select name="status_perkawinan" id="inputState" class="form-control">
                                        <option value="">{{$editkru->status_perkawinan}}</option>
                                        <option value="single">Single</option>
                                        <option value="sudah_menikah">Sudah Menikah</option>
                                        <option value="duda">Duda</option>
                                        <option value="janda">Janda</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Status Karyawan</label>
                                    <input type="text" name="status" class="form-control" value="{{$editkru->status}}"/>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="form-group col-md-3">
                                            <label>Provinsi</label>
                                            <input type="text" name="provinsi" class="form-control" value="{{$editkru->provinsi}}"/>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label>Kota</label>
                                            <input type="text" name="provinsi" class="form-control" value="{{$editkru->provinsi}}"/>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label>Kecamatan</label>
                                            <input type="text" name="kecamatan" class="form-control" value="{{$editkru->kecamatan}}"/>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label>Kelurahan</label>
                                            <input type="text" name="kelurahan" class="form-control" value="{{$editkru->kelurahan}}"/>
                                        </div>
                                    </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="form-group col-md-3">
                                            <label>RT</label>
                                            <input type="number" name="rt" class="form-control" value="{{$editkru->RT}}"  />
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label>RW</label>
                                            <input type="number" name="rw" class="form-control" value="{{$editkru->RW}}"  />
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Alamat</label>
                                            <input type="address" name="alamat" class="form-control" value="{{$editkru->alamat}}"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection

