@extends('front.index')

@section('title')
    Contact
@endsection

@section('content')


    <div class="banner-area banner-bg-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner">
                        <h2>Contact Us</h2>
                        <ul class="page-title-link">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="contact" class="section wb">
        <div class="container">
            <div class="section-title text-center">
                <h3>{{trans('front.Get_in_touch')}}</h3>

            </div><!-- end title -->

            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="contact_form">
                        <div id="message"></div>
                        <form id="contactform" class="row" action="contact.php" name="contactform" method="post">
                            <fieldset class="row-fluid">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <input type="text" name="first_name" id="first_name" class="form-control" placeholder="{{trans('front.your_name')}}">
                                </div>
                                <!--
                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                    <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name">
                                                                </div>
                                -->
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <input type="email" name="email" id="email" class="form-control" placeholder="{{trans('front.your_email')}}">
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <label class="sr-only">{{trans('front.select_service')}}</label>
                                    <select name="select_service" id="select_service" class="selectpicker form-control" data-style="btn-white">
                                        <option value="12">{{trans('front.select_service')}}</option>
                                        <option value="Web Design">Web Design</option>
                                        <option value="Web Development">Web Development</option>
                                        <option value="Graphic Design">Graphic Design</option>
                                        <option value="Others">Others</option>
                                    </select>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <textarea class="form-control" name="comments" id="comments" rows="6" placeholder="{{trans('front.your_message')}}"></textarea>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center">
                                    <button type="submit" value="SEND" id="submit" class="btn btn-light btn-radius btn-brd grd1 btn-block">{{trans('front.save')}}</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->

            <div class="row">
                <div class="col-md-4 col-sm-4   pd-add  text-center">
                    <div class="address-item">
                        <div class="address-icon">
                            <i class="icon icon-location2"></i>
                        </div>
                        <h3>{{trans('front.address')}}</h3>
                        <p>PO Box 16122 Collins Street West
                            <br> Victoria 8007 Australia</p>
                    </div>

                </div>

                <div class="col-md-4 col-sm-4  pd-add text-center">
                    <div class="address-item">
                        <div class="address-icon">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </div>
                        <h3>{{trans('front.email_us')}}</h3>
                        <p>info@yoursite.com
                            <br>info@yoursite.com</p>
                    </div>

                </div>

                <div class="col-md-4 col-sm-4  pd-add text-center">
                    <div class="address-item">
                        <div class="address-icon">
                            <i class="icon icon-headphones"></i>
                        </div>
                        <h3>{{trans('front.call_us')}}</h3>
                        <p>+61 3 8376 6284
                            <br>+61 3 8376 6185</p>
                    </div>

                </div>



            </div><!-- end row -->

        </div><!-- end container -->
    </div><!-- end section -->


@endsection