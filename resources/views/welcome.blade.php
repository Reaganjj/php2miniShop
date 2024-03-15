<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
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
        * {
  box-sizing: border-box;
  margin: 0; padding: 0;
}
        :hover {
  outline: 0!important;
  outline-offset: 0;
}
::before{
  position: absolute;
  content: "";
}
        .btn {
  position: relative;
  display: inline-block;
  width: auto; height: auto;
  background-color: transparent;
  border: none;
  cursor: pointer;
  margin: 0px 25px 15px;
  min-width: 150px;
}
  .btn span a {         
    position: relative;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;
    font-weight: bold;
    letter-spacing: 2px;
    text-transform: uppercase;
    top: 0; left: 0;
    width: 100%;
    padding: 15px 20px;
    transition: 0.3s;
  }
  .btn-1::before {
  background-color: #474747;
  transition: 0.3s ease-out;
}
.btn-1 span a {
    text-decoration: none;
  color: rgb(255,255,255);
  border: 1px solid #474747;
  transition: 0.2s 0.1s;
}
.btn-1 span a:hover {
    text-decoration: none;
  color: rgb(28, 31, 30);
  transition: 0.2s 0.1s;
}
        .btn.hover-filled-opacity::before {
  top:0; bottom: 0; right: 0;
  height: 100%; width: 100%;
  opacity: 1;
}
.btn.hover-filled-opacity:hover::before {
  opacity: 0;
}
.navigo {
    height: 30%;
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
        li h2 {
          display: flex;
          color: white;
          text-align: center;
          padding: 15px 20px;
          text-decoration: none;
        }
        .sapatosh {
            padding: 10px 0px 10px 30px;
            size: 20px;
        }
        li a {
          display: block;
          color: white;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;
        }
        
        li a:hover {
          background-color: #6a6a6a;
        }
        .shoesland {
          height: 55%;
        }
        .shopnow {
          padding-top: 23%;
        }
        .textland {
          font-style: italic;
          font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
          font-size: 45px;
          padding-top: 29%;
          color:#ffffff;
        }
        .textland2 {
          padding-top: 12%;
          color:#ffffff;
        }
        </style>
</head>
<body>
  <div class="box">
    <nav class="navigo">
        <ul class="nav-list">
            <img class="sapatosh" src="https://i.im.ge/2024/03/15/RjQeBD.sapatosh.png" />
            <li class="nav-item"><h2>SOLE SOCIETY</h2></li>
        </ul>
    </nav>
    <h2 class="position-absolute top-0 start-50 translate-middle textland">"Express Yourself from Sole to Sow"</h2>
    <img class="position-absolute top-50 start-50 translate-middle shoesland" src="https://i.im.ge/2024/03/15/RjTH7W.SHOES-LANDING-PAGE.webp">
    <h3 class="position-absolute top-50 start-50 translate-middle textland2">--Best Quality Shoes--</h3>
    <div class="position-absolute top-50 start-50 translate-middle shopnow">
      <button class="btn btn-1 hover-filled-opacity">
          <span><a href="/product">SHOP NOW</span>
        </button>
      </div>
</div>


    </div>
</body>
</html>