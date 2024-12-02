
<section class="shop_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>Tienda</h2>
        </div>
        
        @foreach($productsGroupedByCategory as $categoryName => $product)
            <div class="category_section">
                <!-- Título de la categoría -->
                <h3 class="category_title">{{ $categoryName }}</h3>
                <div class="row">
                    <!-- Mostrar hasta 4 productos de esta categoría -->
                    @foreach($product->take(12) as $product)
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="box">
                                <a href="{{url('product_details', $product->id)}}">
                                    <div class="img-box">
                                        <img src="products/{{$product->image}}" alt="">
                                    </div>
                                    <div class="detail-box">
                                        <h6>{{$product->title}}</h6>
                                        <h6>Precio
                                            <span>{{$product->price}}</span>
                                        </h6>
                                    </div>
                                    <div style="padding: 15px;">
                                        <a href="{{url('product_details', $product->id)}}" class="btn btn-danger">Detalles</a>
                                        <a class="btn btn-primary" href="{{url('add_cart', $product->id)}}">Añadir al carrito</a>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <hr> <!-- Línea para separar categorías -->
        @endforeach
    </div>
</section>
