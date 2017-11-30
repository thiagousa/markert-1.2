<h1>{{ $pageTitle }}</h1>
<ul>
    @foreach($products as $product)
    <li>
        {{ $product->ProductID.' - '.$product->ProductName }}
    </li>
    @endforeach
</ul>

<form action="{{ route('addProduct') }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    ProductID: <input type="text" name="productId">
    <br>
    Product Name: <input type="text" name="productName">
    <br>
    <input type="submit" value="Send">
</form>