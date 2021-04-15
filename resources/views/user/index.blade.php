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
                                <a href="#">Dashboard</a>
                            </li>
                            <li class="list-inline-item seprate">
                                <span>/</span>
                            </li>
                            <li class="list-inline-item">Data User</li>
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
                <a href="{{ route('user.create') }}" class="au-btn au-btn-icon au-btn--green au-btn--small">
                    <i class="zmdi zmdi-plus"></i>Add Data</a>
            </div>
        </div>
        <div class="table-responsive table-responsive-data2">
            <table class="table table-data2" >
                <thead>
                    <tr>
                        <th>Nama</th>
						<th>Email</th>
						<th>Hak Akses</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
					@foreach ($user as $p)
                    <tr class="tr-shadow">
                        <td>{{ $p->name}}</td>
						<td>{{ $p->email }}</td>
						<td>{{ $p->hak_akses }}</td>
                        <td>
                            <div class="table-data-feature">
                            <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                <a href="{{ route('user.edit',$p->id) }}"><i class="zmdi zmdi-edit"></i></a>
                            </button>
                        	<form onsubmit="event.preventDefault()" id="myForm-{{ $p->id }}" action="{{ route('user.destroy',$p->id)}}" method="post">
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