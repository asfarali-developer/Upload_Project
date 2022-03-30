  @include('header')
     <!-- slider_area_start -->
    <div class="slider_area">
        <div class="slider_active owl-carousel">
            <div class="single_slider d-flex align-items-center justify-content-center slider_bg_1">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text text-center">
                                <h3>Montana Resort</h3>
                                <p>Unlock to enjoy the view of Martine</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider  d-flex align-items-center justify-content-center slider_bg_2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text text-center">
                                <h3>Life is Beautiful</h3>
                                <p>Unlock to enjoy the view of Martine</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider d-flex align-items-center justify-content-center slider_bg_1">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text text-center">
                                <h3>Montana Resort</h3>
                                <p>Unlock to enjoy the view of Martine</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider  d-flex align-items-center justify-content-center slider_bg_2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text text-center">
                                <h3>Life is Beautiful</h3>
                                <p>Unlock to enjoy the view of Martine</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->
       
      <!-- about_area_start -->
    <div class="about_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5">
                    <div class="about_info">
                        <div class="section_title mb-20px">
                            <span>About Us</span>
                            <h3>A Luxuries Hotel <br>
                                with Nature</h3>
                        </div>
                        <p>Suscipit libero pretium nullam potenti. Interdum, blandit phasellus consectetuer dolor ornare
                            dapibus enim ut tincidunt rhoncus tellus sollicitudin pede nam maecenas, dolor sem. Neque
                            sollicitudin enim. Dapibus lorem feugiat facilisi faucibus et. Rhoncus.</p>
                        <a href="#" class="line-button">Learn More</a>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7">
                    <div class="about_thumb d-flex">
                        <div class="img_1">
                            <img src="img/about/about_1.png" alt="">
                        </div>
                        <div class="img_2">
                            <img src="img/about/about_2.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about_area_end -->

   
   <!-- offers_area_start -->
    <div class="offers_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <h1 style='text-align:center; margin-bottom:20px;'> Our Rooms </h1>
                <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#ID</th>
      <th scope="col">Room Name</th>
      <th scope="col">Room Number</th>
      <th scope="col">Room Description</th>
      <th scope="col">Max ocupancy</th>
      <th scope="col">Actions:</th>
    </tr>
  </thead>
  <tbody>
      @foreach($rooms as $rm)
    <tr>
      <th scope="row">{{$rm->id}}</th>
      <td>{{$rm->room_name}}</td>
      <td>{{$rm->room_num}}</td>
      <td>{{$rm->room_desc}}</td>
      <td>{{$rm->max_occupancy}}</td>
      <td>
          <a href="{{ url('/edit', $rm->id) }}" class ='btn btn-info btn-sm'>Edit</a>
          <a href="{{ url('/delete', $rm->id) }}" class ='btn btn-danger btn-sm'>Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>






                </div>
            </div>
        </div>
    </div>
    <!-- offers_area_end -->




    <!-- video_area_start -->
    <div class="video_area video_bg overlay">
        <div class="video_area_inner text-center">
            <span>Montana Sea View</span>
            <h3>Relax and Enjoy your <br>
                Vacation </h3>
            <a href="https://www.youtube.com/watch?v=vLnPwxZdW4Y" class="video_btn popup-video">
                <i class="fa fa-play"></i>
            </a>
        </div>
    </div>
    <!-- video_area_end -->

    <!-- about_area_start -->
    <div class="about_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-7">
                    <div class="about_thumb2 d-flex">
                        <div class="img_1">
                            <img src="img/about/1.png" alt="">
                        </div>
                        <div class="img_2">
                            <img src="img/about/2.png" alt="">
                        </div>
                    </div>
                
                </div>
                <div class="col-xl-5 col-lg-5">
                    <div class="about_info">
                        <div class="section_title mb-20px">
                            <span>Luxury Rooms</span>
                            <h3>We are having<br>
                                Luxury Rooms</h3>
                        </div>
                        <!-- <p>Suscipit libero pretium nullam potenti. Interdum, blandit phasellus consectetuer dolor ornare
                            dapibus enim ut tincidunt rhoncus tellus sollicitudin pede nam maecenas, dolor sem. Neque
                            sollicitudin enim. Dapibus lorem feugiat facilisi faucibus et. Rhoncus.</p> -->
            
                            <form action='' method="POST">
                  @csrf
         <div class="form-group">
    <label for="exampleInputEmail1">Room name</label>
    <input type="text" class="form-control" name='room_name'
    id="exampleInputEmail1" aria-describedby="emailHelp" >
  </div>

    <div class="form-group">
    <label for="exampleInputEmail1">Room number</label>
    <input type="number" class="form-control" name='room_num'
    id="exampleInputEmail1" aria-describedby="emailHelp"  >
  </div>

  
    <div class="form-group">
    <label for="exampleInputEmail1">Room description</label>
    <input type="text" class="form-control" name='room_desc'
    id="exampleInputEmail1" aria-describedby="emailHelp"  >
  </div>

       <div class="form-group">
    <label for="exampleInputEmail1">Max Occupancy</label>
    <input type="number" class="form-control" name='max_occupancy'
    id="exampleInputEmail1" aria-describedby="emailHelp"  >
  </div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about_area_end -->

    <!-- features_room_startt -->
    <div class="features_room">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-100">
                        <span>Featured Rooms</span>
                        <h3>Choose a Better Room</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="rooms_here">
            <div class="single_rooms">
                <div class="room_thumb">
                    <img src="img/rooms/1.png" alt="">
                    <div class="room_heading d-flex justify-content-between align-items-center">
                        <div class="room_heading_inner">
                            <span>From $250/night</span>
                            <h3>Superior Room</h3>
                        </div>
                        <a href="#" class="line-button">book now</a>
                    </div>
                </div>
            </div>
            <div class="single_rooms">
                <div class="room_thumb">
                    <img src="img/rooms/2.png" alt="">
                    <div class="room_heading d-flex justify-content-between align-items-center">
                        <div class="room_heading_inner">
                            <span>From $250/night</span>
                            <h3>Deluxe Room</h3>
                        </div>
                        <a href="#" class="line-button">book now</a>
                    </div>
                </div>
            </div>
            <div class="single_rooms">
                <div class="room_thumb">
                    <img src="img/rooms/3.png" alt="">
                    <div class="room_heading d-flex justify-content-between align-items-center">
                        <div class="room_heading_inner">
                            <span>From $250/night</span>
                            <h3>Signature Room</h3>
                        </div>
                        <a href="#" class="line-button">book now</a>
                    </div>
                </div>
            </div>
            <div class="single_rooms">
                <div class="room_thumb">
                    <img src="img/rooms/4.png" alt="">
                    <div class="room_heading d-flex justify-content-between align-items-center">
                        <div class="room_heading_inner">
                            <span>From $250/night</span>
                            <h3>Couple Room</h3>
                        </div>
                        <a href="#" class="line-button">book now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- features_room_end -->

    <!-- forQuery_start -->
    <div class="forQuery">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1 col-md-12">
                    <div class="Query_border">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-xl-6 col-md-6">
                                <div class="Query_text">
                                    <p>For Reservation 0r Query?</p>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="phone_num">
                                    <a href="#" class="mobile_no">+10 576 377 4789</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- forQuery_end-->

    <!-- instragram_area_start -->
    <div class="instragram_area">
        <div class="single_instagram">
            <img src="img/instragram/1.png" alt="">
            <div class="ovrelay">
                <a href="#">
                    <i class="fa fa-instagram"></i>
                </a>
            </div>
        </div>
        <div class="single_instagram">
            <img src="img/instragram/2.png" alt="">
            <div class="ovrelay">
                <a href="#">
                    <i class="fa fa-instagram"></i>
                </a>
            </div>
        </div>
        <div class="single_instagram">
            <img src="img/instragram/3.png" alt="">
            <div class="ovrelay">
                <a href="#">
                    <i class="fa fa-instagram"></i>
                </a>
            </div>
        </div>
        <div class="single_instagram">
            <img src="img/instragram/4.png" alt="">
            <div class="ovrelay">
                <a href="#">
                    <i class="fa fa-instagram"></i>
                </a>
            </div>
        </div>
        <div class="single_instagram">
            <img src="img/instragram/5.png" alt="">
            <div class="ovrelay">
                <a href="#">
                    <i class="fa fa-instagram"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- instragram_area_end -->


          



        @include('footer')