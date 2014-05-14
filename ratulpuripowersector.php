<?php include 'doctype.html'; include 'globalvar.php';?>
<body data-spy="scroll" data-target="#navbar" data-offset="0">
   <header id="header" role="banner">
        <div class="container">
            <div id="navbar" class="navbar navbar-default">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img alt="Ratul Puri" src="images/images.jpg" alt=""></a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li ><a href="<?php echo $GLOBALS['url_prefix']?>/index.php" data-hashprop="#main-slider"><i class="icon-home"></i></a></li>
                        
                        <li><a href="<?php echo $GLOBALS['url_prefix']?>/index.php#portfolio">Portfolio</a></li>
                        <li><a href="<?php echo $GLOBALS['url_prefix']?>/index.php#biography">Biography</a></li>
						<li><a href="/index.php#recognition">Recognition</a></li>
						<li class="active"><a href="<?php echo $GLOBALS['url_prefix']?>/blog.php">Blog</a></li>
						
                        
                    </ul>
                </div>
            </div>
        </div>
    </header><!--/#header-->
<section id ="blog">
	<div class="container">
            <div class="box">
			<div class="center gap">
			<h2>Panel discussion on Challenges in the Indian power sector</h2>
			</div>
			<p class="lead">
				<p><iframe height="300" frameborder="0" width="300" style="float:left; margin-right:20px;" allowfullscreen="" src="//www.youtube.com/embed/6gWsYENtYCI"></iframe></p>
<p>Here are excerpts  from a panel discussion that I attended today. I was joined by Dr R S Sharma, MD, Jindal Power and Dr Arvind Prasad, Director, FICCI on the panel.</p>
<p>Pitching strongly for implementing coal price pooling in the country to meet increasing coal demand in the country, I was contesting that there is no immediate solution to the problem being faced by power producers.</p>
<p>“Moreover, there is no alternate, but to augment domestic coal production in the long term” I said while discussing problems in the power sector.</p>
<p>“When we have our own natural resources in the country, there is a need to harness these resources rather than importing from countries like Australia and Africa after spending millions of dollars”, I added.</p>
<p>In a major relief to private power producers, the government last year gave its go-ahead for a mechanism (cost post pricing model) that would allow the electricity generators to pass through to distribution utilities the cost of expensive imported coal used by them, which will directly impact the consumers.</p>
			</div>
	</section>
	
 <?php include 'footer.html';?>
