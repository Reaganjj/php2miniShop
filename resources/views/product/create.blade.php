<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
  /* CSS for Add New Product button */
.add-product-button {
    background-color: #4CAF50; /* Green background color */
    color: white; /* Text color */
    padding: 10px 20px; /* Add padding */
    text-align: center; /* Center text */
    text-decoration: none; /* Remove underline */
    display: inline-block; /* Make it inline */
    font-size: 16px; /* Font size */
    border: none; /* Remove border */
    border-radius: 5px; /* Rounded corners */
    cursor: pointer; /* Add cursor pointer */
}

/* Hover effect */
.add-product-button:hover {
    background-color: #45a049; /* Darker green on hover */
}
.n-success {
      
      margin: 25px;
      width: 20%;
      padding: 12px 37px 12px 12px;
      color: #333;
      border-radius: 2px;
      background: #fff;
      position: center;
      font-weight: bold;
    font-family:'cairo',serif;
    text-align: center;
        box-sizing: border-box;
    }
        
          .n-success {
      border: 2px solid #32a846;
      color: #32a846;
    }
    body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            color: red;
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
      <form method="post" action="{{route('product.store')}}">
        @csrf
        @method('post')
    <div>
        <label>Product Name: </label>
        <input type="text" name="productname" >
    </div>
    <div>
        <label>Quantity: </label>
        <input type="number" step="1" name="quantity" >
    </div>
    <div>
        <label>Price: </label>
        <input type="number" name="productprice">
    </div>
    <div>
        <label>Description: </label>
        <input type="text" name="description">
    </div>
    <div>
        <input type="submit" class="add-product-button" value="Confirm" />
    </div>
    </form>
    </div>
</body>
</html>