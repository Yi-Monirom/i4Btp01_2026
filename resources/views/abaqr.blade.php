<h2>Scan to Pay</h2>

<img src="{{ $qr_image }}" />

<p>Order ID: {{ $order->id }}</p>
<p>Amount: ${{ $order->total_price }}</p>