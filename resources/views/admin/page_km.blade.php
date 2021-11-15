@extends('layouts.template')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Data Kapal Pribadi</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <div class="page-header">
                        <div class="page-title">
                            <div class="input-group inputSearch mb-4 border rounded-pill p-1">
                                <div class="input-group-prepend border-0">
                                    <button id="button-addon4" type="button" class="btn btn-link">
                                        <i class="fa fa-search icon-fa"></i>
                                    </button>
                                </div>
                                <input type="search" placeholder="Pencarian.." aria-describedby="button-addon4" class="form-control bg-one border-0">
                            </div>
                            @if( auth()->user()->level == '1')
                            <button type="button" class="btn btnUnit"><a href="{{ url ('page_km/table_km') }}">Tambah Unit Kapal</a></button>
                            @else
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="table-responsive">
                        @if(Session::has('success'))
                            <div class='alert alerts success' role="alert">
                                {{ Session::get('success') }}
                            </div>
                        @endif
                        <table class="table table-responsive-sm">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Kapal</th>
                                    <th>Kru Kapal</th>
                                    <th>No Sertifikat</th>
                                    <th>Nama Sertifikat</th>
                                    <th>Nama Penyewa</th>
                                    <th>Destinasi</th>
                                    <th>Mulai Sewa</th>
                                    <th>Selesai Sewa</th>
                                    <th>Keterangan</th>
                                    @if( auth()->user()->level == '1')
                                    <th>Action</th>
                                    @else
                                    @endif
                                    <th>Status</th>
                                </tr>

                            </thead>
                            <tbody>
                            @foreach ($pribadi as $item)
                                <tr>
                                <td>{{ $loop->iteration }}</td>
                                    <!--<span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Disabled popover">
                                        <td class="test">
                                            <a>juneb</a>
                                            <ul class="divs">
                                                <li>
                                                    <a>Connect</a>
                                                </li>
                                                <li>
                                                    <a>Modify</a>
                                                </li>
                                                <li>
                                                    <a>Data Explorer</a>
                                                </li>
                                                <li>
                                                    <a>Metrics</a>
                                                </li>
                                                <li>
                                                    <a>BI Connector</a>
                                                </li>
                                                <li>
                                                    <a class="destructive">Terminate</a>
                                                </li>
                                            </ul>
                                        </td>
                                        </span> -->
                                        <td>{{ $item->nama_kapal }}</td>
                                        <td>{{ $item->nama_kru }}</td>
                                        <td>{{ $item->no }}</td>
                                        <td>#</td>
                                        <td>{{ $item->nama_penyewa }}</td>
                                        <td>{{ $item->keberangkatan}}-{{ $item->tujuan}}</td>
                                        <td>{{Carbon\Carbon::parse($item->mulai_sewa)->format("d M Y")}}</td>
                                        <td>{{Carbon\Carbon::parse($item->sewa_selesai)->format("d M Y")}}</td>
                                        <td>{{ $item->keterangan }}</td>
                                        @if( auth()->user()->level == '1')
                                        <td>
                                        <button class="btn btn-icon" type="menu"><i class="fas fa-file "></i></button>
                                        <!-- <button class="btn btn-icon" type="button"><i class="fas fa-edit mr-1" data-toggle="modal" data-target="#editApps"></i></button> -->
                                        <a href="page_km/table_km/edit/{{$item->id}}" class='fas fa-edit mr-1'><span data-feather="edit"></span></a>
                                        <form action='/table_km/hapus/{{ $item->id }}' method='post' class='d-inline'>
                                            @method('DELETE')    
                                            @csrf
                                            <button class='fas fa-trash border-0' onclick="return confirm('hapus?')"><span data-feather="x-circle"></span></button>
                                        </form>
                                        </td>
                                        @else
                                        @endif
                                    <td><button class="btn" type="" style="background-color: #55B0DC; color: white;">Perjalanan</button></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <!---Modal-->
                <div class="modal fade" id="editApps" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h6 class="modal-title titleModal">Edit Data Kapal Pribadi</h6>
                                <div class="vl"></div>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <div class="row">
                                                    <div class="col">
                                                        <label>Nama Kapal</label>
                                                        <input type="text" class="form-control" placeholder="Nama Barang" value="#">
                                                    </div>
                                                    <div class="col">
                                                        <label>Nama Kru</label>
                                                        <select multiple class="chosen-select form-control" tabindex="22" id="multiple-label-example">
                                                            <option value=""></option>
                                                            <option>Bambang</option>
                                                            <option>Jame</option>
                                                            <option>Luniar</option>
                                                            <option selected>Giant</option>
                                                            <option>neekade</option>
                                                            <option>Sun</option>
                                                            <option>Polar </option>
                                                            <option>Spectacled</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <div class="row">
                                                    <div class="col">
                                                        <label>Nama Penyewa</label>
                                                        <input type="text" class="form-control" placeholder="Nama Barang">
                                                    </div>
                                                    <div class="col">
                                                        <label>Keberangkatan</label>
                                                        <select id="inputState" class="form-control">
                                                            <option selected>Choose...</option>
                                                            <option>Jakarta</option>
                                                            <option>Bandung</option>
                                                            <option>Madura</option>
                                                        </select>
                                                    </div>
                                                    <div class="col">
                                                        <label>Destinasi Tujuan</label>
                                                            <select id="inputState" class="form-control">
                                                                <option selected>Choose...</option>
                                                                <option>Jakarta</option>
                                                                <option>Bandung</option>
                                                                <option>Madura</option>
                                                            </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <div class="row">
                                                    <div class="col">
                                                        <label>Mulai Sewa</label>
                                                        <div class="dateMounth">
                                                            <input type="date" name="dateofbirth" id="dateofbirth" class="dateTerm" />
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <label>Sewa Selesai</label>
                                                        <input type="date" name="dateofbirth" id="dateofbirth" class="dateTerm" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="basic-form col-md-12">
                                                <form>
                                                    <div class="form-group">
                                                        <textarea class="form-control" rows="4" id="comment" placeholder="Note"></textarea>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="from-group col-md-6">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <button type="submit" class="btn btn-default" style="background-color: #55B0DC; color: #fff;">Save</button>
                                                    </div>
                                                    <div class="col-3">
                                                        <button class="btn btn-danger" onclick="closeModal()">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection