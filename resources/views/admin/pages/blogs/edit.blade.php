@extends('admin.layouts.app')

@section('content')

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">სიახლის რედაქტირება</h4>

                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <div class="card-body">
                                @if (count($errors) > 0)
                                    <div class="alert alert-danger">
                                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <form action="{{ route('admin.blogs.update',$blog->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3 row">
                                        <label for="example-text-input"
                                               class="col-md-2 col-form-label">დასახელება</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="text" value="{{ $blog->title }}"
                                                   name="title" id="example-text-input">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="text" class="col-md-2 col-form-label">აღწერა</label>
                                        <div class="col-md-10">
                                            <textarea name="description" id="text" placeholder="სრული ინფორმაცია"
                                                      class="form-control"
                                                      type="text">{!! $blog->description !!}</textarea>
                                        </div>
                                    </div>
                                    <img src="{{ asset('blogs_img/'.$blog->img) }}" alt="{{ $blog->title }}" width="100">
                                    <div class="mb-3 row">
                                        <label for="example-email-input" class="col-md-2 col-form-label">სურათი</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="file" name="image" value="bootstrap@example.com"
                                                   id="example-email-input">
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-outline-primary waves-effect waves-light">
                                        განახლება
                                    </button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div> <!-- container-fluid -->
    </div>

@endsection
@push('js')
    <script src="https://cdn.ckeditor.com/4.14.0/full/ckeditor.js"></script>
    <script type="text/javascript">
        CKEDITOR.replace('text', {
            language: 'en',
            toolbarGroups: [
                {name: 'document', groups: ['mode', 'document', 'doctools']},
                {name: 'clipboard', groups: ['clipboard', 'undo']},
                {name: 'editing', groups: ['find', 'selection', 'spellchecker', 'editing']},
                {name: 'forms', groups: ['forms']},
                '/',
                {name: 'basicstyles', groups: ['basicstyles', 'cleanup']},
                {name: 'paragraph', groups: ['list', 'indent', 'blocks', 'align', 'bidi', 'paragraph']},
                {name: 'links', groups: ['links']},
                {name: 'insert', groups: ['insert']},
                '/',
                {name: 'styles', groups: ['styles']},
                {name: 'colors', groups: ['colors']},
                {name: 'tools', groups: ['tools']},
                {name: 'others', groups: ['others']},
                {name: 'about', groups: ['about']}
            ],
            removeButtons: 'Source,Save,Form,Checkbox,Radio,TextField,Textarea,Select,Button,ImageButton,HiddenField,Image,Flash,Iframe,About',
        })
    </script>
@endpush
