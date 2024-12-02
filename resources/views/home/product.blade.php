<section class="shop_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>Ultimos Productos Agregados</h2>
        </div>
        <div class="row">
            @foreach($product->take(4) as $products)
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="box">
                        <a href="{{url('product_details', $products->id)}}">
                        <div class="img-box">
                            <img src="products/{{$products->image}}" alt="">
                        </div>
                        <div class="detail-box">
                            <h6>{{$products->title}}</h6>
                            <h6>Precio
                                <span>{{$products->price}}</span>
                            </h6>
                        </div>
                        <div style="padding: 15px;">
                            <a href="{{url('product_details', $products->id)}}" class="btn btn-danger">Detalles</a>
                            <a class="btn btn-primary" href="{{url('add_cart', $products->id)}}">Añadir al carrito</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
