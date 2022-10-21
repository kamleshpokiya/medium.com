@extends('admin.partials.master')

@section('content')
    <style>
        .container {
            max-width: 450px;
        }

        .push-top {
            margin-top: 50px;
        }

        .articles {
            border-left: 1px solid #dee2e6;
            border-right: 1px solid #dee2e6;
            border-bottom: 1px solid #dee2e6;
        }
    </style>

    <!-- <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.css') }}"> -->
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Articles</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Articles</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{ $message }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    @if ($message = Session::get('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>{{ $message }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="pull-right mb-2">
                        <a class="btn btn-success" href="{{ route('articles.create') }}"> Create Article</a>
                    </div>
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-body">
                            <table id="example1" class="table ">
                                <thead>
                                    <tr>
                                        <th style="width: 1%">
                                            #
                                        </th>
                                        <th style="width: 20%">
                                            Article Name
                                        </th>
                                        <th style="width: 20%">
                                            Tags
                                        </th>
                                        <th style="width: 20%">Actions
                                        </th>
                                    </tr>
                                </thead>
                                <?php $i = 0;
                                
                                use App\Models\Tag;
                                ?>
                                <tbody>
                                    @foreach ($articles as $article)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $article->name }}</td>
                                            <?php
                                            
                                            $promo = [];
                                            $tags = explode(',', $article->tag_id);
                                            foreach ($tags as $val) {
                                                $promo[] = Tag::where(['id' => $val])->pluck('name')[0];
                                            }
                                            $tag_vals = implode(', ', $promo);
                                            ?>
                                            <td>{{ $tag_vals }}</td>
                                            <td class="project-actions text-right">
                                                
                                                <form method="POST"
                                                    action="{{ route('articles.destroy', $article->id) }}">
                                                    @method('DELETE')
                                                    @csrf
                                                    <a class="btn btn-primary btn-sm"
                                                    href="{{ route('articles.show', $article->id) }}"><i
                                                        class="fas fa-folder"></i>View</a>
                                                <a class="btn btn-info btn-sm"
                                                    href="{{ route('articles.edit', $article->id) }}"><i
                                                        class="fas fa-pencil-alt"></i> Edit</a>
                                                    {{-- <a class="btn btn-danger btn-sm" href=""><i class="fas fa-trash"></i>Delete</a> --}}
                                                    <button type="submit" class="btn btn-danger btn-sm .delete-article"><i
                                                            class="fas fa-trash"></i>Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <script>
        $('.delete-article').click(function(e) {
            e.preventDefault() // Don't post the form, unless confirmed
            if (confirm('Are you sure?')) {
                // Post the form
                $(e.target).closest('form').submit() // Post the surrounding form
            }
        });
    </script>
    <script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
    <!-- DataTables -->
    <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script>
        $(function() {

            $('#example1').DataTable({
                "responsive": true,
                "autoWidth": false,
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.alert').fadeOut(6000);
        });
    </script>
    <!-- /.content-wrapper -->
@endsection
