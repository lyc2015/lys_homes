@extends('backend.layouts.app2')

@section('title', "FileUpload")

@push('styles')

<!-- JQuery DataTable Css -->
<link rel="stylesheet"
    href="{{ asset('backend/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}">

@endpush

@section('content')

<div class="block-header">
    <a href="{{route('admin.fileupload.create')}}"
        class="waves-effect waves-light btn right m-b-15 addbtn">
        <i class="material-icons left">add</i>
        <span>CREATE </span>
    </a>
</div>

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header bg-red">
                <h2>ファイルUpload</h2>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                        <thead>
                            <tr>
                                <th width="50">NO.</th>
                                <th>文件类型</th>
                                <th width="300">文件名</th>
                                <th width="150">文件大小(单位：B)</th>
                                <th width="150">文件链接</th>
                                <th width="150">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach( $list as $key => $file)
                            <tr>
                                <td>{{$file->id}}</td>
                                <td>
                                    <span title="{{$file->file_type}}">
                                        {{ str_limit($file->file_type) }}
                                    </span>
                                </td>
                                <td>
                                    <span>
                                        {{ str_limit($file->file_name) }}
                                    </span>
                                <td>
                                    {{ $file->file_size }}
                                </td>
                                <td>
                                    {{$file->file_link}}
                                </td>

                                <td class="text-center">
                                    <a href="{{route('admin.fileupload.show',$file->id)}}"
                                        class="btn btn-success btn-sm waves-effect">
                                        <i class="material-icons">visibility</i>
                                    </a>
                                    <a href="{{route('admin.fileupload.edit',$file->id)}}"
                                        class="btn btn-info btn-sm waves-effect">
                                        <i class="material-icons">edit</i>
                                    </a>
                                    <button type="button" class="btn btn-danger btn-sm waves-effect"
                                        onclick="deletePost({{$file->id}})">
                                        <i class="material-icons">delete</i>
                                    </button>
                                    <form action="{{route('admin.fileupload.destroy',$file->id)}}" method="POST"
                                        id="del-post-{{$file->id}}" style="display:none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


@push('scripts')

<!-- Jquery DataTable Plugin Js -->
<script src="{{ asset('backend/plugins/jquery-datatable/jquery.dataTables.js') }}"></script>
<script src="{{ asset('backend/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js') }}"></script>
<script src="{{ asset('backend/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('backend/plugins/jquery-datatable/extensions/export/buttons.flash.min.js') }}"></script>
<script src="{{ asset('backend/plugins/jquery-datatable/extensions/export/jszip.min.js') }}"></script>
<script src="{{ asset('backend/plugins/jquery-datatable/extensions/export/pdfmake.min.js') }}"></script>
<script src="{{ asset('backend/plugins/jquery-datatable/extensions/export/vfs_fonts.js') }}"></script>
<script src="{{ asset('backend/plugins/jquery-datatable/extensions/export/buttons.html5.min.js') }}"></script>
<script src="{{ asset('backend/plugins/jquery-datatable/extensions/export/buttons.print.min.js') }}"></script>

<!-- Custom Js -->
<script src="{{ asset('backend/js/pages/tables/jquery-datatable.js') }}"></script>

<script>
function deletePost(id) {

    swal({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.value) {
            document.getElementById('del-post-' + id).submit();
            swal(
                'Deleted!',
                'Post has been deleted.',
                'success'
            )
        }
    })
}
</script>


@endpush
