<?php require_once('inc/db.php');?>
 <?php require_once('inc/top.php');?>
  </head>
  <body>
    <?php require_once('inc/header.php');?>

    
    <div class="jumbotron">
        <div class="container">
            <div id="details" class="animated fadeInLeft">
                <h1>মেধাবি <span>স্কুল</span></h1>
                <p>গনিতের সকল কিছু এক সাইটে</p>
            </div>
        </div>
        <img src="img/top-image-ms.JPG" alt="Top Image">
    </div>
    
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                   <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
                      <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                      </ol>

                      <!-- Wrapper for slides -->
                      <div class="carousel-inner" role="listbox">
                        <div class="item active">
                          <img src="img/slider%201.jpg" alt="Slider 1">
                          <div class="carousel-caption">
                            This is Heading for slider 1
                          </div>
                        </div>
                        <div class="item">
                          <img src="img/slider%202.jpg" alt="Slider 2">
                          <div class="carousel-caption">
                            This is the Heading for slider 2
                          </div>
                        </div>
                        <div class="item">
                          <img src="img/slider%203.jpg" alt="Slider 3">
                          <div class="carousel-caption">
                            This is the Heading for slider 3
                          </div>
                        </div>
                        <div class="item">
                          <img src="img/slider-img2.jpg" alt="Slider 4">
                          <div class="carousel-caption">
                            This is the Heading for slider 4
                          </div>
                        </div>
                      </div>

                      <!-- Controls -->
                      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                    
                    <?php
                    
                    $query = "SELECT * FROM posts WHERE STATUS = 'publish' ORDER BY ID DESC";
                    
                    $run = mysqli_query($run, $query);
                    if(mysqli_num_rows($run) > 0 ){
                        while($row = mysqli_fetch_array($run)){
                            $id = $row['id'];
                            $date = $row['date'];
                            $title = $row['title'];
                            $author_ = $row['author_'];
                            $author_image = $row['author_image'];
                            $categories = $row['categories'];
                            $tags = $row['tags'];
                            $post_date = $row['post_date'];
                            $views = $row['views'];
                            $status = $row['status'];
                            $images = $row['images'];
            
                    ?>
                    
                    
                    
                    <div class="post">
                        <div class="row">
                            <div class="col-md-2 post-date">
                                <div class="day">16</div>
                                <div class="month">January</div>
                                <div class="year">2018</div>
                            </div>
                            <div class="col-md-8 post-title">
                                <a href="#"><h2><?php echo $title; ?></h2></a>
                                <p>Written by: <span><?php echo $author_?></span></p>
                            </div>
                            <div class="col-md-2 profile-picture">
                                <img src="img/profile-black.jpg" alt="Profile Picture" class="img-circle">
                            </div>
                        </div>
                        <a href="#"><img src="img/post-image-1.jpg" alt="Post Image"></a>
                        <p class="desc">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>
                        <a href="#" class="btn btn-primary">Read More...</a>
                        <div class="bottom">
                            <span class="first"><i class="fa fa-folder"></i><a href="#"> Category</a></span>|
                            <span class="sec"><i class="fa fa-comment"></i><a href="#"> Comment</a></span>
                        </div>
                    </div>
                    
                    <?php
                                                
                        }
                    }
                    else{
                        echo "<center><h2>No post available</h2></center>";
                    }
                    
                    ?>
                    
                    
                    <nav id="pagination">
                      <ul class="pagination">
                        <li>
                          <a href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                          </a>
                        </li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li>
                          <a href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                          </a>
                        </li>
                      </ul>
                    </nav>
                </div>
                
                <div class="col-md-4">
                 <?php require_once('inc/sidebar.php');?>

            </div>
        </div>
    </section>
    <?php require_once('inc/footer.php');?>