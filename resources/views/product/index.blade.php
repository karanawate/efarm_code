<!DOCTYPE html>
<html lang="en">
<head>
  <style>
        *, *:before, *:after {
  box-sizing: border-box;
}

h2{
  font-size: 18px;
  padding: 14px 10px;
}

h3{
  font-size: 16px;
  padding: 12px 10px;
}

h2, h3, a{
  clear: both;
  margin: 0;
  font-family: sans-serif;
  text-align: center;
}

img{
  width: 100%;
  height: auto;
  display: block;
}

a{
  display: block;
  text-decoration: none;
  width: 100%;
}

a:hover{
  text-decoration: underline;
  color: #333;
}

.grid-container{
  max-width: 1024px;
  margin: 0 auto;
  font-size: 0;
}

.grid-item{
  width: 23%;
  border: 1px solid #ccc;
  margin: 1%;
  display: inline-block;
}

.vew-product{
  color: #333;
  width: 100%;
  display: block;
  margin: 0;
}

.view-product *{
   color: #333;
}

.product-name{
  width: 100%;
  height: 82px;
}

.price{
  width:100%;
  bottom: 44px;
}

.add-to-cart{
  height: 44px;
  line-height: 44px;
  width: 100%;
  color: black;
  font-size: 16px;
}
  </style>
</head>
<body>
    <div class="grid-container">
        @foreach($product_data as $pro)
        <div class="grid-item">
        <a href="product-detail/{{$pro->id }}" class="view-product">
            <img src="http://placehold.it/200x150&text=4:3">
          <h2 class="product-name"  >{{ $pro->name }}</h2>
          <h3 class="price">{{ $pro->price }}</h3>
          </a>
    </div>
        @endforeach
      </div>
</body>
</html>
