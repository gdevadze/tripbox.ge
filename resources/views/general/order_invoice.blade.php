<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.0/css/bootstrap.min.css'>
<style>
    .invoice-head td {
  padding: 0 8px;
}
.container {
  padding-top:30px;
}
.invoice-body{
  background-color:transparent;
}
.invoice-thank{
  margin-top: 60px;
  padding: 5px;
}
address{
  margin-top:15px;
}

.container {
    padding-left: 50px;
}
</style>

<div class="container">
    	<div class="row">
    		<div class="span4" style="width: 100%;">
                <img src="https://tripbox.ge/assets/images/logo.png" style="width: 50%;" class="img-rounded logo">
    			<address>
			        <strong>Car Owner</strong><br>
                 
                    {{ $order->car->user->full_name }} -    {{ $order->car->user->tel }} -    {{ $order->car->user->email }}
		    	</address>
                <address>
			        <strong>Client</strong><br>
                 
                    {{ $order->user->full_name }} -    {{ $order->user->tel }} -    {{ $order->user->email }}
		    	</address>
    		</div>
    		<div class="span4 well" style="width: 280px;float:left;margin-right:25px;">
    			<table class="invoice-head">
    				<tbody>
    					
    					<tr>
    						<td class="pull-right"><strong>Pickup</strong></td>
    						
    					</tr>


    					<tr>
    						<td class="pull-right"><strong>Date</strong></td>
    						<td>{{ \Carbon\Carbon::parse($order->date_to)->format('H:i') }} {{ \Carbon\Carbon::parse($order->date_from)->format('d.m.Y') }}</td>
    					</tr>

                        <tr>
    						<td class="pull-right"><strong>Location</strong></td>
    						<td>{{ $order->location_from_id }}</td>
    					</tr>

                     
    					
    				</tbody>
    			</table>
    		</div>

            <div class="span4 well" style="width: 280px;float:left;">
    		<table class="invoice-head">
    				<tbody>
    					
    					<tr>
    						<td class="pull-right"><strong>Return</strong></td>
    						
    					</tr>


    					<tr>
    						<td class="pull-right"><strong>Date</strong></td>
    						<td>{{ \Carbon\Carbon::parse($order->date_to)->format('H:i') }} {{ \Carbon\Carbon::parse($order->date_to)->format('d.m.Y') }}</td>
    					</tr>

                        <tr>
    						<td class="pull-right"><strong>Location</strong></td>
    						<td>{{ $order->location_to_id }}</td>
    					</tr>

                     
    					
    				</tbody>
    			</table>
    		</div>


    	</div>
    	<div class="row">
    		<div class="span8">
    			<h2 style="font-size: 20px;">@lang('order_details') #{{ $order->id }}</h2>
    		</div>
    	</div>
    	<div class="row">
		  	<div class="span8 well invoice-body">
		  		<table class="table table-bordered">
					<thead>
						<tr>
                          <th>Title</th>
							<th>Quantity</th>
                        
							<th>Amount</th>
						</tr>
					</thead>
					<tbody>
					<tr>
						<td>{{ $order->car->brand->name }} {{ $order->car->brand_model->name }} / {{ $order->car->vehicle_number }}</td>
						<td>@lang('rents') {{ Carbon\Carbon::parse($order->date_from)->diffInDays($order->date_to) }} @lang('dayys')</td>
			
                      <td>{{ $order->price }} $</td>
						</tr>


                        <tr>
						<td>@lang('deliverys') / {{ $order->location_from_id }} - {{ $order->location_to_id }}</td>
						<td></td>
			
                      <td>{{ $order->delivery_price + $order->refund_price }} $</td>
						</tr>


                        @if($order->car->deposit)
                        <tr>
						<td>@lang('deposits') </td>
						<td></td>
			
                      <td>100$</td>
						</tr>
                        @endif




            <tr><td colspan="4"></td></tr>

                        <tr>
							<td colspan="1">&nbsp;</td>
							<td><strong>Payable On Pickup</strong></td>
							<td><strong> {{ $order->total_price }}$</strong></td>
						</tr>

                        <tr>
							<td colspan="1">&nbsp;</td>
							<td><strong>Amount Prepaid</strong></td>
							<td><strong> {{ $order->payable_price }}$</strong></td>
						</tr>

                        

                        <tr>
							<td colspan="1">&nbsp;</td>
							<td><strong>@lang('total_moneys')</strong></td>
							<td><strong> {{ $order->total_price + $order->payable_price }}$</strong></td>
						</tr>


					</tbody>
				</table>
		  	</div>
  		</div>
  		<div class="row">
  			<div class="span8 well invoice-thank">
  				<h5 style="text-align:center;">Thank You!</h5>
  			</div>
  		</div>
  		<div class="row">
  	    	<div class="span3">
  		        <strong>Phone:</strong>+995 591 30 09 98
  	    	</div>
  	    	<div class="span3">
  		        <strong>Email:</strong> <a href="mailto:info@tripbox.ge">info@tripbox.ge</a>
  	    	</div>
  	    	<div class="span3">
  		        <strong>Website:</strong> <a href="https://tripbo.ge">www.tripbox.ge</a>
  	    	</div>
  		</div>
    </div>
    <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.0/js/bootstrap.min.js'></script>
