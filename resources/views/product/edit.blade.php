<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    body {
  background-image: url('https://i.im.ge/2024/03/15/R9eAXm.BG-IMAGE.webp');
  height: 100%;
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    background-repeat: no-repeat;
    background-position: center;
  background-attachment: fixed;
  background-size: cover;
    
}
.box {
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
	width: 400px;
	padding: 0px 0px 40px;
	background: rgba(0, 0, 0, 0.479);
	box-sizing: border-box;
	box-shadow: 0 15px 25px rgba(0,0,0,.5);
    height: 85%;
    width: 95%;
    border: 3px solid #ffffff;
}
        h1 {
            text-align: center;
            margin-top: 20px;
            color: #007bff;
        }


        label {
            display: block;
            margin-bottom: 5px;
            color:rgba(255, 255, 255, 0.479);
            font-size: 20px;
        }

        input[type="text"],
        input[type="number"],
        textarea {
            width: 40%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            background-color: #00000081;
            border-radius: 4px;
            box-sizing: border-box;
            color:#ffffff;
            height: 50px;
        }
        textarea {
            height: 100px;
        }



ul {
          list-style-type: none;
          display: flex;
          margin: 0;
          padding: 0;
          height: 40%;
          overflow: hidden;
          background-color: #00000081;
        }
        
        li {
          float: left;
        }
        li h1 {
          display: flex;
          color: white;
          text-align: center;
          padding-left: 50px;
          padding-bottom: 10px;
          text-decoration: none;
          font-size: 30px;
        }
        .prtbtn {
            border: none;
background: transparent;
cursor: pointer;
padding-right: 40px;
            padding-top: 30px;
        }
        .formpaddy {
            padding-left: 30px;
        }
</style>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
        </ul>
        @endif
    </div>
    <form class="box" method="post" action="{{route('product.update', ['product' => $product])}}">
        @csrf
        @method('put')
        <nav class="navigo">
            <ul class="nav-list">
                <li class="nav-item"><h1>EDIT PRODUCT</h1></li>       
            </ul>
            <div class="d-flex flex-row-reverse">
                <button class="prtbtn" type="submit"><img src="https://i.im.ge/2024/03/15/RjSHR6.New-Project-1.png" /></button>
            </div>
        </nav>
    <div class="formpaddy">
        <label>Product Name: </label>
        <input type="text" name="productname" value="{{$product->productname}}">
    </div>
    <div class="formpaddy">
        <label>Quantity: </label>
        <input type="number" step="1" name="quantity" value="{{$product->quantity}}">
    </div>
    <div class="formpaddy">
        <label>Price: </label>
        <input type="number" name="productprice" value="{{$product->productprice}}">
    </div>
    <div class="formpaddy">
        <label>Description: </label>
        <textarea name="description" value="{{$product->description}}" cols="50" rows="10"></textarea>
    </div>
</form>
</body>
</html>