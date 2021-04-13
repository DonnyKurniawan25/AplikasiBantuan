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
                            <li class="list-inline-item">Data Training</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END BREADCRUMB-->

 <div class="row">
    <div class="col-md-10 offset-md-1">
        <!-- DATA TABLE -->
        <div class="table-data__tool">
        <h3 class="title-5 m-b-35">Data Training</h3>
            <div class="table-data__tool-right">
                <a href="{{ route('training.create') }}" class="au-btn au-btn-icon au-btn--green au-btn--small">
                    <i class="zmdi zmdi-plus"></i>Add Data</a>
                <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                    <select class="js-select2" name="type">
                        <option selected="selected">Export</option>
                        <option value="">Option 1</option>
                        <option value="">Option 2</option>
                    </select>
                    <div class="dropDownSelect2"></div>
                </div>
            </div>
        </div>
        <div class="table-responsive table-responsive-data2">
            <table class="table table-data2 datatable" >
                <thead>
                    <tr>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Umur</th>
                        <th>Status Perkawinan</th>
                        <th>Pendidikan</th>
                        <th>Pekerjaan</th>
                        <th>Jumlah Tanggungan</th>
                        <th>Keputusan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
					@foreach ($data as $p)
                    <tr class="tr-shadow">
                        <td>{{ $p->NIK }}</td>
                        <td>{{ $p->Nama }}</td>
                        <td>{{ $p->Jenis_kelamin }}</td>
                        <td>
                            <span class="block-email">{{ $p->Umur }}</span>
                        </td>
                        <td class="desc">{{ $p->Status_perkawinan }}</td>
                        <td>{{ $p->Pendidikan }}</td>
                        <td>
                            <span>{{ $p->Pekerjaan }}</span>
                        </td>
                        <td>{{ $p->Jumlah_tanggungan }}</td>
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
        <!-- END DATA TABLE -->
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
