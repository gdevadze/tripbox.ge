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
                        <h4 class="mb-sm-0 font-size-18">პროდუქციები</h4>


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
                            {{--                            </p>--}}

                            <table id="users" class="table table-bordered dt-responsive  nowrap w-100">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">პროდუქცია</th>
                                    <th scope="col">კოდი</th>
                                    <th scope="col">ფასი</th>
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
                    url: "{{ route('admin.products.ajax') }}",
                    type: 'POST',
                    data: function (d) {
                        d._token = '{{ csrf_token() }}'
                        d.status = $('#status1').val()
                    }
                },
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'title', name: 'title'},
                    {data: 'barcode', name: 'barcode'},
                    // {data: 'real_estate_title', name: 'real_estate_type',searchable:false},
                    // {data: 'name', name: 'name',searchable:false},
                    {data: 'price', name: 'price',searchable:false},
                    {data: 'action', name: 'action',searchable:false},

                ]
            });
            $.fn.dataTable.ext.errMode = 'none';

            $('#status1').on('change', function () {
                    table.draw();
                });
        });

        function reload() {
            table.ajax.reload();
        }


        function changeHotOfferStatus(id) {
            Swal.fire({
                title: 'ნამდვილად გსურთ განცხადებაზე ცხელი შეთავაზების სტატუსის ცვლილება?',
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
                            url: "{{ route('admin.products.change.hot_offer.status') }}",
                            type: "POST",
                            dataType: "JSON",
                            data: {
                                '_token': '{{ csrf_token() }}',
                                'id': id
                            },
                        })
                            .done(function (response) {
                                if (response.status === 1) {
                                    Swal.fire('წარმატებული','განცხადება წარმატებით წაიშალა','success');
                                    reload();
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
