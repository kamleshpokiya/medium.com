@extends('admin.partials.master')

@section('content')
    <style>
        .container {
            max-width: 450px;
        }

        .push-top {
            margin-top: 50px;
        }
    </style>

    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Add Article</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Add Article</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">

                <div class="col-md-12">
                    <div class="card card-info">
                        <!-- <div class="card-header">
                                    <h3 class="card-title">Horizontal Form</h3>
                                  </div> -->
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form class="form-horizontal" method="post" action="{{ route('articles.store') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="article_name" class="col-sm-2 col-form-label">Article Name</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="article_name" class="form-control" id="article_name"
                                            placeholder="Atricle Name" value= " {{old ('article_name') }} ">
                                        @error('article_name')
                                            <div class="text-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                        {{-- @if ($errors->has('article_name'))
                                            <div class="text-danger">{{ $errors->first('article_name') }}</div>
                                        @endif --}}
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="tag" class="col-sm-2 col-form-label">Tag Name</label>
                                    <div class="col-sm-8">
                                        <select class="form-control select2" multiple="multiple" style="width: 100%;"
                                            name="tag_id[]" id="tag_id">
                                            {{-- <option selected="selected" value="">Select Tags<option> --}}
                                            @foreach ($articles as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('tag_id'))
                                            <div class="text-danger">{{ $errors->first('tag_id') }}</div>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="file" class="col-sm-2 col-form-label">Images</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="file"
                                                    name="image[]" multiple>
                                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                            </div>
                                            @if ($errors->has('image'))
                                                <div class="text-danger">{{ $errors->first('image') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Article Description</label>
                                    <div class="col-sm-8">
                                        <textarea class="textarea ckeditor" name="description" id="description" placeholder="Place some text here"
                                            style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{old ('description') }}</textarea>
                                        @if ($errors->has('description'))
                                            <div class="text-danger">{{ $errors->first('description') }}</div>
                                        @endif
                                    </div>
                                </div>

                            </div>
                            <!-- /.card-body -->
                            <div class="col-sm-12">
                                <div class="card-footer">
                                    <input type="submit" value="Create new Article" class="btn btn-success">
                                    <a href="{{ route('articles.index') }}" class="btn btn-secondary">Cancel</a>
                                </div>
                            </div>
                            <!-- /.card-footer -->
                        </form>
                    </div>
                </div>

            </div>

        </section>
        <!-- /.content -->
    </div>
    <script src="{{ asset('plugins/select2/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('plugins/ckeditor/ckeditor.js') }}"></script>
    <script type="text/javascript">
        $(function() {
            $('.select2').select2()
        })
        $(document).ready(function() {
            CKEDITOR.replace('description', {
                height: '400px',
                extraPlugins: 'forms'
            });
        });
    </script>
    <!-- /.content-wrapper -->
@endsection
