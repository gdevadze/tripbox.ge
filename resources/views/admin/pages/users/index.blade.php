@extends('admin.layouts.app')
@push('css')
    <link href="{{ asset('admin/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('admin/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}"
          rel="stylesheet" type="text/css"/>

    <!-- Responsive datatable examples -->
    <link href="{{ asset('admin/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}"
          rel="stylesheet" type="text/css"/>
@endpush
@section('content')

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">მომხმარებლები</h4>


                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                </div>
                            @endif
                            {{--                            <h4 class="card-title">Default Datatable</h4>--}}
                            {{--                            <p class="card-title-desc">DataTables has most features enabled by--}}
                            {{--                                default, so all you need to do to use it with your own tables is to call--}}
                            {{--                                the construction function: <code>$().DataTable();</code>.--}}
                            {{--                            </p>
                                <a type="submit" href="{{ route('admin.users.create') }}" class="btn btn-outline-primary waves-effect waves-light mb-2">
                                    დამატება
                                </a>--}}
                            <table id="users" class="table table-bordered dt-responsive  nowrap w-100">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">სახელი</th>
                                    <th scope="col">მობილური</th>
                                    <th scope="col">ელ.ფოსტა</th>
                                    <th scope="col">ქალაქი</th>
                                    <th scope="col">როლი</th>
                                    <th scope="col">მოქმედება</th>
                                </tr>
                                </thead>


                                <tbody>

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div> <!-- container-fluid -->
    </div>
<div id="modal_form" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal_label"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="htmlDisplay"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">დახურვა</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
@endsection

@push('js')
    <!-- Required datatable js -->
    <script src="{{ asset('admin/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <!-- Buttons examples -->
    <script src="{{ asset('admin/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('admin/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('admin/libs/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('admin/libs/pdfmake/build/pdfmake.min.js') }}"></script>
    <script src="{{ asset('admin/libs/pdfmake/build/vfs_fonts.js') }}"></script>
    <script src="{{ asset('admin/libs/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('admin/libs/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('admin/libs/datatables.net-buttons/js/buttons.colVis.min.js') }}"></script>

    <!-- Responsive examples -->
    <script src="{{ asset('admin/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script
        src="{{ asset('admin/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>

    <!-- Datatable init js -->
    <script src="{{ asset('admin/js/pages/datatables.init.js') }}"></script>

    <script>
        let table;
        let save_method;
        $(document).ready(function () {

            table = $('#users').DataTable({
                processing: true,
                order: [[0, 'desc']],
                serverSide: true,
                language: {
                    url: "{{ __('table-language') }}"
                },
                ajax: {
                    url: "{{ route('admin.users.ajax') }}",
                    type: 'POST',
                    data: function (d) {
                        d._token = '{{ csrf_token() }}'
                    }
                },
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'full_name', name: 'name'},
                    {data: 'formatted_tel', name: 'tel'},
                    {data: 'email', name: 'email'},
                    {data: 'city_title', name: 'city_title'},
                    {data: 'role', name: 'role'},
                    {data: 'action', name: 'action'},
                    {data: 'surname', name: 'surname',visible:false},
                ]
            });
        });

        $(document.body).on('click', '#disable_user_modal', function () {
            $('#modal_label').html('ინფორმაცია')
            $('#modal_form').modal('show');
            $(".htmlDisplay").html('<h3 align=center class=text-warning><i class="fa fa-spinner fa-spin" style="font-size:24px"></i> დაელოდეთ...</h3>');
            $.ajax({
                url: "{{ route('admin.users.render.relation.data') }}",
                method: "POST",
                data: {
                    _token: '{{ csrf_token() }}',
                    'id': $(this).data('id')
                },
                success: function (msg) {
                    $('.htmlDisplay').html(msg.html);
                },
                error: function () {
                    alert('შეცდომა, გაიმეორეთ მოქმედება.');
                }
            })
        })

        function reload() {
            table.ajax.reload();
        }

        function balanceAction(id) {
            let action = $('.btn-blnc').data('status');
            console.log(action)
            if (action == 'balance-plus'){
                $('#balance_form')[0].reset(); // reset form on modals
                $('.form-group').removeClass('has-error'); // clear error class
                $('.help-block').empty(); // clear error string
                $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
                $('#modal_title').text(`ბალანსის შევსება`);
                $('#balance_user_id').val(id)
                $('#action').val(action)
            }else if(action == 'balance-minus'){
                $('#balance_form')[0].reset(); // reset form on modals
                $('.form-group').removeClass('has-error'); // clear error class
                $('.help-block').empty(); // clear error string
                $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
                $('#modal_title').text(`ბალანსის ჩამოჭრა`);
                $('#balance_user_id').val(id)
                $('#action').val(action)
            }else{
                Swal.fire('შეცდომა','მოქმედება შეუძლებელია!','error')
            }
        }

            function saveBalance() {
                $('#btnSave').html('დაელოდეთ...');
                $('#btnSave').attr('disabled', true);
                let url;
                var data_save = $('#balance_form').serializeArray()
                url = "{{ url('admin/users/balance_action') }}";
                $.ajax({
                    url: url,
                    method: "POST",
                    data: data_save,
                    success: function (data) {
                        if (data.status == 1) {
                            Swal.fire('წარმატებული!', data.msg, 'success');
                            $('#modal_form').modal('hide');
                            reload();
                        } else if(data.status == 2) {
                            Swal.fire('შეცდომა', data.msg, 'error');
                        }else{
                            Swal.fire('შეცდომა', 'სცადეთ მოგვიანებით', 'error');
                        }


                        $('#btnSave').html('შენახვა');
                        $('#btnSave').attr('disabled', false); //set button enable
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        if (xhr.status == 422) { // when status code is 422, it's a validation issue
                            $('.errors').html('');
                            $.each(xhr.responseJSON.errors, function (i, error) {
                                $('.'+i+'_err').html(error);
                            });
                        }
                        $('#btnSave').html('შენახვა');
                        $('#btnSave').attr('disabled', false); //set button enable
                    }
                });
            }

            function userVerification(id) {
                let agentId = $('#agent_id').val();
            Swal.fire({
                title: 'ნამდვილად გსურთ მძღოლის გააქტიურება?',
                text: "",
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'დიახ!',
                cancelButtonText: 'არა!',
                preConfirm: function () {
                    return new Promise(function (resolve) {
                        $('.swal2-confirm').html('<i class="fa fa-spinner fa-spin mr-1"></i>');
                        $.ajax({
                            url: "{{ route('admin.users.activate.user') }}",
                            type: "POST",
                            dataType: "JSON",
                            data: {
                                '_token': '{{ csrf_token() }}',
                                'id': id,
                                'agent_id': agentId
                            },
                        })
                            .done(function (response) {
                                if (response.status === 1) {
                                    Swal.fire({
                                        title: 'წარმატებული!',
                                        text: "მძღოლი წარმატებით გააქტიურდა",
                                        icon: 'success',
                                        showCancelButton: false
                                    }).then((result) => {
                                        if (result.value) {
                                            location.reload()
                                        }
                                    })
                                } else {
                                    Swal.fire('შეცდომა!', 'სცადეთ მოგვიანებით', 'error');
                                }
                            })
                            .fail(function () {
                                Swal.fire('შეცდომა!', 'სცადეთ მოგვიანებით', 'error');
                            });
                    });
                },
                allowOutsideClick: true
            });
        }

        function deleteUser(id) {
            Swal.fire({
                title: 'ნამდვილად გსურთ მომხმარებლის წაშლა?',
                text: "",
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'დიახ!',
                cancelButtonText: 'არა!',
                preConfirm: function () {
                    return new Promise(function (resolve) {
                        $('.swal2-confirm').html('<i class="fa fa-spinner fa-spin mr-1"></i>');
                        $.ajax({
                            url: "{{ route('admin.users.delete.user') }}",
                            type: "POST",
                            dataType: "JSON",
                            data: {
                                '_token': '{{ csrf_token() }}',
                                'id': id
                            },
                        })
                            .done(function (response) {
                                if (response.status === 1) {
                                    Swal.fire({
                                        title: 'წარმატებული!',
                                        text: "მომხმარებელი წარმატებით წაიშალა",
                                        icon: 'success',
                                        showCancelButton: false
                                    }).then((result) => {
                                        if (result.value) {
                                            location.reload()
                                        }
                                    })
                                } else {
                                    Swal.fire('შეცდომა!', 'სცადეთ მოგვიანებით', 'error');
                                }
                            })
                            .fail(function () {
                                Swal.fire('შეცდომა!', 'სცადეთ მოგვიანებით', 'error');
                            });
                    });
                },
                allowOutsideClick: true
            });
        }
    </script>
@endpush
