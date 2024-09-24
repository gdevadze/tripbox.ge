@extends('admin.layouts.app')

@section('content')

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">შეკვეთის დეტალები</h4>

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
{{--                                <form action="{{ route('admin.blogs.update',$blog->id) }}" method="POST" enctype="multipart/form-data">--}}
                                    <div class="row">
                                 <div class="col-lg-4 col-md-4 col-12">
                                    <div class="mb-6">
                                       <h6>ინფორმაცია</h6>
                                       <p class="mb-1 lh-lg">
                                            სახელი, გვარი: {{ $order->user->full_name ?? $order->name }}
                                            <br />
                                            სახელი, გვარი: {{ $order->user->tel ?? $order->tel }}
                                            <br />
                                            ავტომობილის ნომერი:
                                            <span class="text-dark">{{ $order->car->vehicle_number }}</span>
                                            <br />
                                            შეკვეთის თარიღი:
                                            <span class="text-dark">{{ $order->formatted_date }}</span>
                                            <br>
                                            თარიღი:
                                            <span class="text-dark">{{ $order->formatted_date_from }} - {{ $order->formatted_date_to }}</span>
                                            <br />
                                            სულ თანხა:
                                            <span class="text-dark">{{ number_format($order->price,2) }}</span>
                                       </p>
                                    </div>
                                 </div>
                                 <div class="col-lg-4 col-md-4 col-12">
                                    <div class="mb-6">
                                       <h6>მფლობელის ინფორმაცია</h6>
                                       <p class="mb-1 lh-lg">
                                            სახელი, გვარი: {{ $order->car->user->full_name }}
                                            <br />
                                            ავტომობილის ნომერი:
                                            <span class="text-dark">{{ $order->car->vehicle_number }}</span>
                                            <br />
                                            მობილური:
                                            <span class="text-dark">{{ $order->car->user->tel }}</span>
                                       </p>
                                    </div>
                                 </div>
                                 </div>
                                 
                                 
{{--                                    <table class="table">--}}
{{--                                        <tr>--}}
{{--                                            <th>დასახელება</th>--}}
{{--                                            <th>ერთ. ფასი</th>--}}
{{--                                            <th>რაოდენობა</th>--}}
{{--                                            <th>ჯამური ფასი</th>--}}
{{--                                        </tr>--}}
{{--                                        @foreach($order['order_details'] as $detail)--}}
{{--                                        <tr>--}}
{{--                                            <td>{{ $detail->product->title }}</td>--}}
{{--                                            <td>{{ $detail->base_price }}</td>--}}
{{--                                            <td>{{ $detail->quantity }}</td>--}}
{{--                                            <td>{{ $detail->total_price }}</td>--}}
{{--                                        </tr>--}}
{{--                                        @endforeach--}}
{{--                                    </table>--}}



{{--                                </form>--}}
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
