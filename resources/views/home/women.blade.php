@extends('header&footer')

@section('content')
    <script>
        function showDetail(tag) {
            var src = tag.getAttribute('src');
            var alt = tag.getAttribute('alt');
            var price = tag.getAttribute('data-price');
            $('#women_title').html(alt);
            $('#women_price').html(price);
            $('#women_pic').attr('src', src);
            $('#detail').modal('show');
        }
    </script>
    <div id="main" class="bg">
        <div class="container">
            <ol class="breadcrumb">
                <li>Home</li>
                <li class="active">Women</li>
            </ol>
            <hr/>
            <div class="pull-left">
                <div>
                    <img onclick="showDetail(this)" src="images/mobile_charger.jpg" alt="Mobile Charger" data-price="$299"
                         width="300" class="img-thumbnail women_pic">
                </div>
                <div class="text-center"><span><a href="product_detail">Mobile Charger</a></span></div>
            </div>
            <div class="pull-left">
                <div>
                    <img onclick="showDetail(this)" src="images/shoes.png" alt="Canvas shoes" data-price="$150"
                         width="300" class="img-thumbnail women_pic">
                </div>
                <div class="text-center"><span><a href="product_detail">Canvas shoes</a></span></div>
            </div>
            <div class="pull-left">
                <div>
                    <img onclick="showDetail(this)" src="images/pillow.jpg" alt="Bilibili Pillow" data-price="$320"
                         width="300" class="img-thumbnail women_pic">
                </div>
                <div class="text-center"><span><a href="product_detail">Bilibili Pillow</a></span></div>
            </div>
            <br/>

        </div>
        <div class="clearfix"></div>
        <div class="modal fade" id="detail" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <p>
                        <span id="women_title"></span>
                        <span id="women_price" class="pull-right"></span>
                    </p>
                    <img id="women_pic" src="" alt="Women Style6" width="570">
                </div>
                <div class="modal-footer">
                    <button type="button" id="btn" class="btn btn-default" data-dismiss="modal">close</button>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
