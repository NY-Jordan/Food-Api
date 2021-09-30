@extends('layouts/navigationPage')

@section('content')
    <section class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6 text-center h3" style="margin-bottom: 40px;">Nos différents Menus</div>
            <div class="col-3"></div>
        </div> 
        <div style="margin-bottom:130px;">
            @foreach ($data as $menu)
                <h4>{{ $menu['title'] }}</h4>
                <div  style="width:25%; height:200px; margin-right: 30px; display:flex; flex-direction:row">
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
