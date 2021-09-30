@extends('layouts/default')

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h4 style="text-align:center;">YV-FOOD</h4>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet, officiis quasi fugiat 
                        dolor quis officia deleniti similique ex commodi perferendis aperiam itaque eius iure, 
                        dignissimos delectus ducimus tenetur, recusandae laboriosam.
                    </p>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet, officiis quasi fugiat 
                        dolor quis officia deleniti similique ex commodi perferendis aperiam itaque eius iure, 
                        dignissimos delectus ducimus tenetur, recusandae laboriosam.
                    </p>

                </div>
                <div class="col-6" > 
                    <img src="{{  asset('images/image_home.jpg')  }}"  style="width:300px; height:300px" alt="" srcset="">     
                </div>
            </div>               
        </div>
    </section> 
    <section class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6 text-center h3" style="margin-bottom: 40px;">Nos différents Menus</div>
            <div class="col-3"></div>
        </div> 
        <div style="display:flex; flex-direction: row; justify-content:center; margin-bottom:130px;">
            @foreach ( $menus as $menu)
                <div  style="width:25%; height:200px; margin-right: 30px; ">
                    <div style="display:flex; justify-content:center">
                        <img src="{{ $menu['image'] }}" style="width:100px; height:100px" alt="" srcset="">
                    </div>
                    <div>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet, officiis quasi fugiat 
                        dolor quis officia deleniti similique ex commodi perferendis aperiam itaque eius iure, 
                        dignissimos delectus ducimus tenetur, recusandae laboriosam
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
