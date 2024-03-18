<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PRODUCT LIST</title>
</head>
<style>
  img {
    height: 100px;
    width: 100px;
  }

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

  label {
    color: white;
  }

  .box {
    position: relative;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 400px;
    padding: 0px 0px 40px;
    background: rgba(0, 0, 0, 0.479);
    box-sizing: border-box;
    box-shadow: 0 15px 25px rgba(0, 0, 0, .5);
    height: 85%;
    width: 95%;
    border: 3px solid #ffffff;
  }

  .box {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 400px;
    padding: 0px 0px 40px;
    background: rgba(0, 0, 0, 0.479);
    box-sizing: inherit;
    box-shadow: 0 15px 25px rgba(0, 0, 0, .5);
    min-height: 85%;
    width: 95%;
    border: 3px solid #ffffff;
    overflow: auto;
  }

  /* CSS for Add New Product button */
  .add-product-button {
    background-color: #4CAF50;
    /* Green background color */
    color: white;
    /* Text color */
    padding: 10px 20px;
    /* Add padding */
    text-align: center;
    /* Center text */
    text-decoration: none;
    /* Remove underline */
    display: inline-block;
    /* Make it inline */
    font-size: 16px;
    /* Font size */
    border: none;
    /* Remove border */
    border-radius: 5px;
    /* Rounded corners */
    cursor: pointer;
    /* Add cursor pointer */
  }

  /* Hover effect */
  .add-product-button:hover {
    background-color: #45a049;
    /* Darker green on hover */
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
    font-family: 'cairo', serif;
    text-align: center;
    box-sizing: border-box;
  }

  .container {
    max-width: 1200px;
    margin: 20px auto;
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    padding: 20px;

  }

  .card {
    background-color: #42424280;
    box-shadow: 0 15px 25px rgba(0, 0, 0, 0.571);
    border-radius: 5px;
    width: calc(25% - 20px);
    margin-bottom: 20px;
    padding: 20px;
    box-sizing: border-box;
    text-align: center
  }

  .card-buttons {
    bottom: 10px;
    left: 0;
    right: 0;
    background: transparent;
    cursor: pointer;
    margin-left: 270%;
    color: rgba(255, 255, 255, 0.479);
  }

  .nextpagebutton {
    margin-left: 90%;
  }
  .addprod {
    position: fixed;
    right: 0;
    height: 70px;
    width: 70px;
    padding-right: 10px;
  }
</style>

<body>
  <div class="box">
    <div>
      @if(session()->has('success'))
      <script>
        alert("<?php echo session('success'); ?>");
     </script>
      @endif
    </div>
    <br />
    <div>
      <div>
        <a href="{{route('product.create')}}"><img class="addprod" src="https://i.im.ge/2024/03/18/RC2WaY.add-da-product.png" /></a>
      </div>
      <div class="container">
        @foreach($products as $product)
        <div class="card">
          <img src="https://imagedelivery.net/9sCnq8t6WEGNay0RAQNdvQ/cldmn8fqh000vjv087vn8z2cu_3/public" /> <br />
          <label>Product Name: {{$product->productname}}</label> <br />
          <label>Quantity: {{$product->quantity}}</label> <br />
          <label>Price: {{$product->productprice}}</label> <br />
          <label>Description: {{$product->description}}</label><br />
          <table>
            <tr>
              <td>
                <br />
                <a class="card-buttons" href="{{route('product.edit', ['product' => $product])}}">Edit</a>
              </td>
              <td>
                <br />
                <form method="post" action="{{route('product.destroy', ['product' => $product])}}">
                  @csrf
                  @method('delete')
                  <input class="card-buttons" type="submit" value="Buy" />
                </form>
              </td>
            </tr>
          </table>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</body>

</html>