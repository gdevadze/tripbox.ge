<div class="mt-2">
    ავტომობილის NO: {{ $car->vehicle_number }}
    <ul class="list-group">
        @foreach($gpsCars as $key => $gpsCar)
        @php
        $gpsService = new App\Services\GpsService;
        $gpsCarStatus = $gpsService->car($gpsCar['carId']);
        @endphp
            <li class="list-group-item">{{ $gpsCarStatus['machineName'] }} - {{ $gpsCarStatus['carNO'] }} <a class="btn btn-primary shadow btn-xs sharp mr-1 set-gps-car-id" href="javascript:void(0)" data-car-id="{{ $car->id }}" data-id="{{ $gpsCar['carId'] }}"><i class="fa fa-check"></i></a></li>
        @endforeach
    </ul>
</div>
