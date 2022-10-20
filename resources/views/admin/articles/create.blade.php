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

<link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.css')}}">
<!-- Select2 -->
<link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css')}}">
<link rel="stylesheet" href="{{ asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
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
                    <form class="form-horizontal">
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="article_name" class="col-sm-2 col-form-label">Article Name</label>
                                <div class="col-sm-8">
                                    <input type="text" name="article_name" class="form-control" id="article_name" placeholder="Atricle Name">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="tag" class="col-sm-2 col-form-label">Tag Name</label>
                                <div class="col-sm-8">
                                    <select class="form-control select2" multiple="multiple" style="width: 100%;" name="tag_id" id="tag_id">
                                        {{-- <option selected="selected" value="">Select Tags<option> --}}
                                        @foreach ($articals as $item)
                                        <option value="{{$item->name}}">{{$item->name}}</option>
                                        @endforeach                                       
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="file" class="col-sm-2 col-form-label">Images</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="file" name="file">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Article Description</label>
                                <div class="col-sm-8">
                                    <textarea class="textarea" name="description" id="description" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                </div>
                            </div>

                        </div>
                        <!-- /.card-body -->
                        <div class="col-sm-12">
                            <div class="card-footer">
                                <input type="submit" value="Create new Article" class="btn btn-success">
                                <a href="#" class="btn btn-secondary">Cancel</a>
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
<script src="{{ asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- Select2 -->
<script src="{{ asset('plugins/select2/js/select2.full.min.js')}}"></script>
<script>
    $(function() {
        // Summernote
        $('.select2').select2()
        $('.textarea').summernote()
    })
</script>
<!-- /.content-wrapper -->
@endsection