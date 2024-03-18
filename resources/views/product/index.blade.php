<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
  /* Basic styles */
body {
  font-family: sans-serif; /* Change this to your preferred font family */
  margin: 20px;
}

/* Success message styling */
.n-success {
  background-color: lightgreen;
  padding: 10px;
  border-radius: 5px;
  margin-bottom: 15px;
}

/* Product table styling */
table {
  border-collapse: collapse; /* Remove borders between table cells */
  width: 100%; /* Make table full width */
}

th, td {
  padding: 10px; /* Add padding to table cells */
  border: 1px solid #ddd; /* Add a thin border to table cells */
  text-align: left; /* Align table content to the left */
}

th {
  background-color: #f2f2f2; /* Light gray background for table headers */
}

/* Add product button styling */
.add-product-button {
  display: block; /* Make button display on a new line */
  padding: 10px 20px;
  background-color: #4CAF50; /* Green color */
  color: white;
  border: none;
  border-radius: 5px;
  text-decoration: none; /* Remove underline */
  cursor: pointer; /* Change cursor to indicate clickability */
}

.add-product-button:hover {
  background-color: #3e8e41; /* Darker green on hover */
}

</style>
<body>
    <div>
      @if(session()->has('success'))
      <div class="n-success">
        {{session('success')}}
      </div>
      @endif
    </div>
    <br />
    <div>
      <div>
        <a href="{{route('product.create')}}" class="add-product-button">Add New Product</a>  
      </div>
      <table border="1">
      <tr>
        <th>Product Name</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Description</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
      @foreach($products as $product)
      <tr>
        <td>{{$product->productname}}</td>
        <td>{{$product->quantity}}</td>
        <td>{{$product->productprice}}</td>
        <td>{{$product->description}}</td>
        <td>
          <a href="{{route('product.edit', ['product' => $product])}}">Edit</a>
        </td>
        <td>
          <form method="post" action="{{route('product.destroy', ['product' => $product])}}">
            @csrf
            @method('delete')
            <input type="submit" value="Buy" />
          </form>
        </td>
      </tr>
      @endforeach
      </table>
    </div>
</body>
</html>