<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>IMHealthSolutions - Integrated Medicine</title>

        <!-- Bootstrap -->
        <link href="{{ URL::asset('plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ URL::asset('plugins/fontawesome/css/font-awesome.min.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet" type="text/css">
        <link href='http://fonts.googleapis.com/css?family=Merriweather+Sans' rel='stylesheet' type='text/css'>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <header>
            <div class="pre-header">
                <div class="container">
                    <div class="row">
                        <div class="contact col-md-6 col-sm-6 col-xs-6">
                            <i class="fa fa-phone"></i> +91-9000000000 | <a href="#"><i class="fa fa-envelope-o "></i> demo@example.com</a>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                            <a class="social-icon"><i class="fa fa-facebook"></i></a>
                            <a class="social-icon"><i class="fa fa-twitter"></i></a>
                            <a class="social-icon"><i class="fa fa-google-plus"></i></a>
                            <a class="social-icon"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-static-top navbar-default" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">IM<span class="highlight">HEALTH</span>SOLUTIONS</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About Us</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Services</a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Our private consultations</a></li>
                                    <li><a href="#">Health testing</a></li>
                                    <li><a href="#">Health products</a></li>
                                    <li><a href="#">Weight loss solutions</a></li>
                                </ul>
                            </li>
                            <li class="active"><a href="#">News</a></li>
                            <li><a href="#">Contact us</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">More</a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Corporate health packages</a></li>
                                    <li><a href="#">Keynote speaker</a></li>
                                    <li><a href="#">Health insurance Providers</a></li>
                                </ul>
                            </li>

                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </header>
        <section class="main-content">
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                    <li><a href="#"><i class="fa fa-newspaper-o"></i> News</a></li>
                </ol>
                <div class="row">
                    <div class="col-md-3 col-sm-4">
                        <h4 class="caps">Choose a category</h4>

                        <div class="list-group">
                            <?php foreach ($categories as $cat) { ?>
                                <a href="<?php echo url('category/' . $cat->id) ?>" class="list-group-item"><?php echo $cat->name ?></a>
                            <?php } ?>


                        </div>


                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-primary">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <i class="fa fa-microphone"></i> Current Issues and Trends
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-primary">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <i class="fa fa-flash"></i> Action Steps for the Week
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-primary">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <i class="fa fa-coffee"></i> Food for Thought
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tags">
                            <ul>
                                <li><a href="#">Health testing</a></li>
                                <li><a href="#">Osteoporosis</a></li>
                                <li><a href="#">Bone health</a></li> 
                                <li><a href="#">Bone density</a></li> 
                                <li><a href="#">Stress release programs</a></li> 
                                <li><a href="#">Nutrition</a></li> 
                                <li><a href="#">Herbal medicine</a></li> 
                            </ul>
                        </div>
                        <div class="panel panel-primary portlet-primary">
                            <div class="panel-body">
                                <p class="lead">
                                    Do you wish to partake in mastering your own health?
                                </p>
                                <ul>
                                    <li>Feeling Tired & Stressed?</li>
                                    <li>Always getting the Flu?</li>
                                    <li>Sick of diets that don’t work</li>
                                </ul>
                                <button class="btn btn-primary"><i class="fa fa-phone"></i> Contact</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-8">
                        <div class="row">

                            <?php foreach ($products as $product) { ?>

                                <div class="col-sm-6 col-md-4">
                                    <div class="thumbnail">
                                        <img src="{{$product->image()}}" alt="...">
                                        <div class="caption">
                                            <h4>{{$product->name}}</h4>
                                            <p class="content">{{$product->about}}</p>
                                            <h5>Price: Rs.{{$product->price}}</h5>
                                            <p class="text-center">
                                                <a class="btn btn-primary btn-sm">Add to cart <i class="fa fa-cart-plus"></i></a>
                                            </p>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>

                            <?php } ?>

                            
                        </div>
                    </div>



                </div>
            </div>
        </section>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <h3>About Us</h3>
                        <hr/>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam sit nonummy nibh euismod tincidunt ut laoreet dolore magna aliquarm erat sit volutpat.</p>
                        <div>
                            <h3>Contact</h3>
                            <hr/>
                            <ul class="fa-ul">
                                <li><i class="fa-li fa fa-envelope-o"></i> <a href="#">info@demo.com</a></li>
                                <li><i class="fa-li fa fa-phone"></i> +91-91234567865</li>
                                <li><i class="fa-li fa fa-map-marker"></i> 69 Prestige Avenue, Bella Vista, <br/>Sydney, Australia</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <h3>Health Rebates</h3>
                        <hr/>
                        <div class="rebates">
                            <a href="#" class="medibank"></a>
                            <a href="#" class="nib"></a>
                            <a href="#" class="hbf"></a>
                            <a href="#" class="unity"></a>
                            <a href="#" class="bupa"></a>
                            <a href="#" class="ahm"></a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="newsletter">
                            <h3>Newsletter</h3>
                            <hr/>
                            <p>Subscribe to our newsletter and stay up to date with the latest news.</p>
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="info@example.com"/>
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="button">Subscribe</button>
                                </span>
                            </div>
                        </div>
                        <h3>Connect</h3>
                        <hr/>
                        <div class="social-icon">
                            <a href="#">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-google-plus"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="post-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            2014 © IMSolutions. ALL Rights Reserved. <a>Privacy Policy</a> | <a>Terms of Service</a>
                        </div>
                        <div class="col-md-6 text-right">
                            Designed by <a>Dynasofts</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- jQuery 2.1.4 -->
        <script type="text/javascript" src="{{ URL::asset('plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
        <!-- Bootstrap 3.3.5 -->
        <script type="text/javascript" src="{{ URL::asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>

<!--        <script>
    $(document).scroll(function(e){
        var scrollTop = $(document).scrollTop();
        if(scrollTop > 32){
            console.log(scrollTop);
            $('.navbar').removeClass('navbar-static-top').addClass('navbar-fixed-top');
        } else {
            $('.navbar').removeClass('navbar-fixed-top').addClass('navbar-static-top');
        }
    });
</script>-->


        <script>
$('.dropdown > .dropdown-toggle, .dropdown > .dropdown-menu').mouseenter(function () {
    if ($(".dropdown").css("float") == "left") {
        $(this).parent().toggleClass('open');
    }
});

$('.dropdown > .dropdown-toggle, .dropdown > .dropdown-menu').mouseleave(function () {
    if ($(".dropdown").css("float") == "left") {
        $(this).parent().removeClass('open');
    }
});

        </script>

    </body>
</html>