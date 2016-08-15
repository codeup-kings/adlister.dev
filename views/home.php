
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-4" id="home-logo"><img class="center-block img-responsive" style="padding:1px; border:1px solid #021a40" src="img/pokemon_logo.jpg"></div>
            <div class="col-md-6">
                <div class="input-group input-group-lg">
                    <input type="text" id="searchHome"class="  search-query form-control" placeholder="Search" style="margin-top: 78px; margin-bottom: 78px"/>
                    <span class="input-group-btn">
                        <button class="btn btn-danger" type="button">
                            <span class=" glyphicon glyphicon-search"></span>
                        </button>
                    </span>
                </div>
            </div>
            <div class="col-md-2">
                <div class="dropdown">
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="margin-top: 78px; margin-bottom: 20px">
                        All Categories
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a href="#">Rare</a></li>
                        <li><a href="#">Mythical</a></li>
                        <li><a href="#">Legendary</a></li>
                    </ul>
                </div>
            </div>
        </div>            
    </div>
</section>

<hr>

<div class="container">
    <div class="row">
        <div class="col-md-3 text-center">
            <h1 id="featured">Featured</h1>
        </div>
    </div>
</div>

<br>

<div class="container">
    <div class="col-xs-12">
        <div class="carousel slide" id="myCarousel">
            <div class="carousel-inner">
                <div class="item active">
                    <ul class="thumbnails">
                        <?php foreach($items->attributes as $key => $item) : ?>
                        <li class="col-sm-3">
                            <div class="fff">
                                <div class="thumbnail">
                                    <img src="<?= $item['image_file']; ?>" class="img-size" alt="" style="padding:1px; border:1px solid #021a40; width:360px;height:240px;">
                                </div>
                                <div class="caption">
                                    <h4 class="text-center"><?= $item['name']; ?></h4>
                                    <p>
                                        <?= substr($item['description'], 0, 100) . "..."; ?>
                                    </p>
                                </div>
                                <p>
                                    <a class="btn btn-mini" href="/ads/show?id=<?= $item['id']; ?>">Read More</a>
                                </p>
                            </div>
                        </li>
                            <?php if (($key + 1) % 4 == 0) : ?>
                    </ul>
                </div>
                <div class="item">
                    <ul class="thumbnails">
                    <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
            <nav>
                <ul class="control-box pager">
                    <li><a data-slide="prev" href="#myCarousel" class=""><i class="glyphicon glyphicon-chevron-left"></i></a></li>
                    <li><a data-slide="next" href="#myCarousel" class=""><i class="glyphicon glyphicon-chevron-right"></i></a></li>
                </ul>
            </nav>

        </div>
    </div>

</div>

<hr>

<section>
    <div class="container">
            <div class="row">        
                <div class="col-md-3 text-center"> 
                    <h1 id="deals">Daily Deals</h1>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-5" text-center>
                        <img src="img/bulbarsar.png" class="img-responsive center-block" width="370" height="257" style="padding:1px; border:1px solid #021a40">
                                <br>
                                <div class="caption" style="padding:1px; border:1px solid #021a40; background-color: #ffffff; opacity: 0.9">
                                    <h4>Praesent commodo</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <a class="btn btn-mini" href="#">» Read More</a>
                                </div>                        
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-5">
                        <img src="img/moltres.png" class="img-responsive center-block" width="500" height="257" style="padding:1px; border:1px solid #021a40">
                                <br>
                                <div class="caption" style="padding:1px; border:1px solid #021a40; background-color: #ffffff; opacity: 0.9">
                                    <h4>Praesent commodo</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <a class="btn btn-mini" href="#">» Read More</a>
                                </div>                                  
                </div>
            </div>
    </div>
</section>

<!-- beginning of footer -->
<div id="footerFragment">
    <footer id="glbfooter" role="contentInfo" class="gh-w" style="padding:1px; border:1px solid grey">
        <div class="container">
            <div id="footer-table">
                <table class="container-fluid text-center">
                    <tbody>
                        <tr>
                            <td>
                                <ul>
                                    <li><h5><a href="../login">Sign In</a></h5></li>
                                </ul>
                            </td>                    
                            <td>
                                <ul>
                                    <li><h5><a href="/ads">Buy</a></h5></li>
                                </ul>
                            </td>
                            <td>
                                <ul>
                                    <li><h5><a href="#">Sell</a></h5></li>
                                </ul>
                            </td>
                            <td>
                                <ul>
                                    <li><h5><a href="#">Trade</a></h5></li>
                                </ul>
                            </td>
                            <td>
                                <ul>
                                    <li><h5><a href="#">Free</a></h5></li>
                                </ul>
                            </td>                        
                        </tr>                
                    </tbody>
                </table>                    
                <a href="#"><i class="fa fa-2x fa-arrow-up" aria-hidden="true"></i></a>
            <div class="pull-right">
                <a href="#"><i class="fa fa-2x fa-arrow-up" aria-hidden="true"></i></a>
            </div>                
        </div>
    </footer>
</div>
