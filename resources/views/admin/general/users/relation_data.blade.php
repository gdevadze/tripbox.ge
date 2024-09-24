@if(count($orders) > 0)
<table class="table">
    <tr>
        <th>დასახელება</th>
        <th>რაოდენობა</th>
        <th>დახარჯული თანხა</th>
    </tr>
    @php
    $totalPrice = 0;
    @endphp
    @foreach($orders as $order)
        @php
        $totalPrice +=  $order->order_details->sum('total_price');
        @endphp
        <tr>
            <td>{{ $order->order_number }}</td>
            <td>{{ $order->order_details->count() }}</td>
            <td>{{ number_format($order->order_details->sum('total_price'),2) }} ლარი</td>
        </tr>
    @endforeach
    <tr>
        <td colspan="2" align="right"><strong>ჯამური თანხა</strong></td>
        <td>{{ number_format($totalPrice,2) }} ლარი</td>
    </tr>
</table>
@endif
@if(count($users) > 0)
    <p>მოწვეული მომხმარებლების რაოდენობა: {{ $users->count() }}</p>
    <table class="table">
        <tr>
            <th>მომხმარებელი</th>
            <th>შენაძენის რაოდენობა</th>
        </tr>
        @php
            $totalPrice = 0;
        @endphp
        @foreach($users as $user)

            <tr>
                <td>{{ $user->full_name }}</td>
                <td>{{ $user->orders->count() }}</td>

            </tr>
        @endforeach
    </table>
@endif
