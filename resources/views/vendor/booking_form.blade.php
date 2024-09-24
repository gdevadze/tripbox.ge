<p>
Hi,
<br><br>
We are pleased to inform you that your booking for a {{ $data['car']['brand']['name'] }} {{ $data['car']['brand_model']['name'] }} is confirmed!
<br><br>
Booking Details:
<br><br>
Client:
<br><br>
Client Name: {{ (isset($data['user']['name'])) ? $data['user']['name'] : $data['name'] }}<br>
Client Email: {{ (isset($data['user']['email'])) ? $data['user']['email'] : $data['email'] }}<br>
Client Tel: <a href="https://wa.me/{{ (isset($data['user']['tel'])) ? $data['user']['tel'] : $data['tel'] }}">{{ (isset($data['user']['tel'])) ? $data['user']['tel'] : $data['tel'] }}<a><br>
<br><br>
Driver:
<br><br>
Driver Name: {{ $data['car']['user']['name'] }}<br>
Driver Email: {{ $data['car']['user']['email'] }}<br>
Driver Tel: <a href="https://wa.me/{{ $data['car']['user']['tel'] }}">{{ $data['car']['user']['tel'] }}</a><br>
<br><br>
Pickup:
<br><br>
Date: {{ Carbon\Carbon::parse($data['date_from'])->format('d.m.Y') }}<br>
Time: {{ Carbon\Carbon::parse($data['date_from'])->format('H:i') }}<br>
Location: {{ $data['location_from_id'] }}
<br><br>
Return:
<br><br>
Date: {{ Carbon\Carbon::parse($data['date_to'])->format('d.m.Y') }}<br>
Time: {{ Carbon\Carbon::parse($data['date_to'])->format('H:i') }}<br>
Location: {{ $data['location_to_id'] }}
<br>
Indicate your car pickup location: {{ $data['address'] }}
@if($data['car']['deposit'])
<br>
Deposit: {{ $data['car']['deposit'] }} $
@endif

@if($data['order_additional_services']->count() > 0)
<br><br>
Additinal Services <br>
@foreach($data['order_additional_services'] as $orderAdditionalService)

<span>{{ $orderAdditionalService->additional_service->title }} / ${{ $orderAdditionalService->price }} {{ Carbon\Carbon::parse($data['date_from'])->diffInDays($data['date_to']) }} @lang('dayes')</span> <br>

@endforeach

@endif


<br><br>
Pricing:
<br><br>
Rent per day: {{ number_format($data['price'] / Carbon\Carbon::parse($data['date_to'])->diffInDays($data['date_from']),2) }} USD<br>
Pickup delivery: {{ $data['delivery_price'] }} USD<br>
Return delivery: {{ $data['refund_price'] }} USD<br>
Total: {{ number_format($data['total_price'],2) }} USD<br>
<br><br>
Prepaid: {{ $data['payable_price'] }} USD<br>
Due on Pickup: {{ $data['total_price'] - $data['payable_price'] }} USD
<br><br>
Thank you for using Trip Box!
<br><br>
Best regards,<br>
Trip Box Team<br>
</p>