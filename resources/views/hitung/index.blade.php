@extends('layout1.app')

@section('content') 

@include('pesan') 



 <!-- BREADCRUMB-->
<section class="au-breadcrumb2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="au-breadcrumb-content">
                    <div class="au-breadcrumb-left">
                        <span class="au-breadcrumb-span">You are here:</span>
                        <ul class="list-unstyled list-inline au-breadcrumb__list">
                            <li class="list-inline-item active">
                                <a href="#">Data Set</a>
                            </li>
                            <li class="list-inline-item seprate">
                                <span>/</span>
                            </li>
                            <li class="list-inline-item">Perhitungan C4.5</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END BREADCRUMB-->
<div class="section__content section__content--p30">
    <div class="container-fluid">
		 <div class="row">
		 	<div class="col-sm-5">
		 		<div class="card">
			 		 <div class="card-body card-block">
			            <form method="post" action="{{ route('training.store') }}" class="form-horizontal">
			      			@csrf
			                <div class="row form-group">
			                    <div class="col col-md-3">
			                        <label for="text-input" class=" form-control-label">NIK</label>
			                    </div>
			                    <div class="col-12 col-md-9">
			                        <input type="number" id="text-input" name="NIK" required placeholder="NIK" class="form-control">
			                        <small class="form-text text-muted"><font color="red">* Wajib Diisi</font></small>
			                    </div>
			                </div>
			                <div class="row form-group">
			                    <div class="col col-md-3">
			                        <label for="text-input" class=" form-control-label">Nama</label>
			                    </div>
			                    <div class="col-12 col-md-9">
			                        <input type="text" id="text-input" name="Nama" required placeholder="Nama" class="form-control">
			                        <small class="form-text text-muted"><font color="red">* Wajib Diisi</font></small>
			                    </div>
			                </div>
			                 <div class="row form-group">
			                    <div class="col col-md-3">
			                        <label class=" form-control-label">Jenis Kelamin</label>
			                    </div>
			                    <div class="col col-md-9">
			                        <div class="form-check">
			                            <div class="radio">
			                                <label for="radio1" class="form-check-label ">
			                                    <input type="radio" id="radio1" name="Jenis_kelamin" required value="L" class="form-check-input">Laki-Laki
			                                </label>
			                            </div>
			                            <div class="radio">
			                                <label for="radio2" class="form-check-label ">
			                                    <input type="radio" id="radio2" required name="Jenis_kelamin" value="P" class="form-check-input">Perempuan
			                                </label>
			                            </div>
			                        </div>
			                        <small class="form-text text-muted"><font color="red">* Wajib Dipilih</font></small>

			                    </div>
			                </div>
			                <div class="row form-group">
			                    <div class="col col-md-3">
			                        <label for="text-input" class=" form-control-label">Umur</label>
			                    </div>
			                    <div class="col-12 col-md-9">
			                        <input type="number" id="text-input" name="Umur" required placeholder="Umur" class="form-control">
			                        <small class="form-text text-muted"><font color="red">* Wajib Diisi</font></small>
			                    </div>
			                </div>
			                <div class="row form-group">
			                    <div class="col col-md-3">
			                        <label for="select" class=" form-control-label">Status Perkawinan</label>
			                    </div>
			                    <div class="col-12 col-md-9">
			                        <select name="Status_perkawinan" id="select" class="form-control">
			                            <option disabled selected>Please select</option>
			                            <option value="Belum Kawin">Belum Kawin</option>
			                            <option value="Kawin">Kawin</option>
			                        </select>
			                        <small class="form-text text-muted"><font color="red">* Wajib Diisi</font></small>
			                    </div>
			                </div>
			                <div class="row form-group">
			                    <div class="col col-md-3">
			                        <label class=" form-control-label">Pendidikan</label>
			                    </div>
			                    <div class="col col-md-9">
			                        <div class="form-check">
			                            <div class="radio">
			                                <label for="radio3" class="form-check-label ">
			                                    <input type="radio" id="radio3" name="Pendidikan" required value="Belum/Tidak Tamat" class="form-check-input">Belum/Tidak Tamat
			                                </label>
			                            </div>
			                            <div class="radio">
			                                <label for="radio4" class="form-check-label ">
			                                    <input type="radio" id="radio4" required name="Pendidikan" value="SD/Sederajat" class="form-check-input">SD/Sederajat
			                                </label>
			                            </div>
			                            <div class="radio">
			                                <label for="radio5" class="form-check-label ">
			                                    <input type="radio" id="radio5" required name="Pendidikan" value="SD/MI/Sederajat" class="form-check-input">SD/MI/Sederajat
			                                </label>
			                            </div>
			                            <div class="radio">
			                                <label for="radio6" class="form-check-label ">
			                                    <input type="radio" id="radio6" required name="Pendidikan" value="SLTP/MTs/Sederajat" class="form-check-input">SLTP/MTs/Sederajat
			                                </label>
			                            </div>
			                        </div>
			                        <small class="form-text text-muted"><font color="red">* Wajib Dipilih</font></small>

			                    </div>
			                </div>
			                 <div class="row form-group">
			                    <div class="col col-md-3">
			                        <label for="select" class=" form-control-label">Pekerjaan</label>
			                    </div>
			                    <div class="col-12 col-md-9">
			                        <select name="Pekerjaan" id="select" class="form-control">
			                            <option disabled selected>Please select</option>
			                            <option value="Tidak Bekerja">Tidak Bekerja</option>
			                            <option value="Buruh">Buruh</option>
			                            <option value="Petani">Petani</option>
			                            <option value="Usaha Sendiri">Usaha Sendiri</option>
			                        </select>
			                        <small class="form-text text-muted"><font color="red">* Wajib Diisi</font></small>
			                    </div>
			                </div>
			                 <div class="row form-group">
			                    <div class="col col-md-3">
			                        <label for="text-input" class=" form-control-label">Jumlah Tanggungan</label>
			                    </div>
			                    <div class="col-12 col-md-9">
			                        <input type="number" id="text-input" name="Jumlah_tanggungan" required placeholder="Jumlah Tanggungan" class="form-control">
			                        <small class="form-text text-muted"><font color="red">* Wajib Diisi</font></small>
			                    </div>
			                </div>
			                 <div class="row form-group">
			                    <div class="col col-md-3">
			                        <label for="select" class=" form-control-label">Keputusan</label>
			                    </div>
			                    <div class="col-12 col-md-9">
			                        <select name="Keputusan" id="select" class="form-control">
			                            <option disabled selected>Please Select</option>
			                            <option value="DITERIMA" >DITERIMA</option>
			                            <option value="DITOLAK">DITOLAK</option>
			                        </select>
			                        <small class="form-text text-muted"><font color="red">* Wajib Diisi</font></small>
			                    </div>
			                </div>
					        <div class="card-footer">
					            <button type="submit" class="btn btn-primary btn-sm">
					                <i class="fa fa-dot-circle-o"></i> Submit
					            </button>
					            <button type="reset" class="btn btn-danger btn-sm">
					                <i class="fa fa-ban"></i> Reset
					            </button>
					        </div>
					    </form>
			    	</div>
		    	</div>
		 	</div>
		 	<div class="col-lg-7">
		    <!-- USER DATA-->
		    <div class="user-data m-b-30">
		        <h3 class="title-3 m-b-30">
		            <i class="zmdi zmdi-account-calendar"></i>Data Testing</h3>
		        <div class="container-fluid">
		            <table class="table table-striped table-bordered datatable">
		                <thead>
		                    <tr>
		                        <td>NIK</td>
		                        <td>Nama</td>
		                        <td>Umur</td>
		                        <td>Jenis Kelamin</td>
		                        <td>Keputusan</td>
		                        <td>Aksi</td>
		                    </tr>
		                </thead>
		                <tbody>
					        @foreach ($hitung as $p)
		                    <tr class="tr-shadow">
		                        <td>{{ $p->NIK }}</td>
		                        <td>{{ $p->Nama }}</td>
		                        <td>
		                            <span class="block-email">{{ $p->Umur }}</span>
		                        </td>
		                        <td>{{ $p->Jenis_kelamin }}</td>
		                        <td>
		                            <span class="status--process">{{ $p->Keputusan }}</span>
		                        </td>
		                        <td>
		                            <div class="table-data-feature">
		                            <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
		                                <a href="{{ route('training.edit',$p->id) }}"><i class="zmdi zmdi-edit"></i></a>
		                            </button>
		                        	<form onsubmit="event.preventDefault()" id="myForm-{{ $p->id }}" action="{{ route('training.destroy',$p->id)}}" method="post">
										{{ csrf_field() }}
										{{method_field('DELETE')}}
										<button class="item" data-toggle="tooltip" data-placement="top" title="Delete" 
										onclick="Hapus({{ $p->id }} )"><i class="zmdi zmdi-delete"></i></button>
										</form>
		                            </div>
		                        </td>
		                    </tr>
							@endforeach
		                </tbody>
		            </table>
		        </div>
		    </div>
		    <!-- END USER DATA-->
		</div>
	</div>
</div>
</div>

<script type="text/javascript">
	function Hapus(id) {
		Swal.fire({
			title: 'DELETE',
			text: 'Apakah anda yakin ingin menghapus data ini ?',
			type: 'Warning',
			showCancelButton: true,
			confirmButtonColor: '#57cce6',
			cancelButtonColor: '#ea6d3d',
			confirmButtonTexxt: 'Ya, Hapus'
		}).then((result)=> {
			if(result.value){
				document.getElementById('myForm-'+id).submit();
			}
		})
	}   

</script>

@endsection
