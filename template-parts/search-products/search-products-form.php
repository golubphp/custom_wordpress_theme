<?php 

        if(isset($_GET['minprice']) && !empty($_GET['minprice']))
        {
            $minprice = $_GET['minprice'];
        } else {
            $minprice = 0;
        }

        if(isset($_GET['maxprice']) && !empty($_GET['maxprice']))
        {
            $maxprice = $_GET['maxprice'];
        } else {
            $maxprice = 10;
        }


        if(isset($_GET['starost_input']) && !empty($_GET['starost_input']))
        {
            $starost_value = $_GET['starost_input'];
        } else {
            $starost_value = '';
        }
		
		if(isset($_GET['stanje_input']) && !empty($_GET['stanje_input']))
        {
            $stanje_value = $_GET['stanje_input'];
        } else {
            $stanje_value = '';
        }

?>
<section class="search-sec">

<h1 class="text-center">Search <span class="badge badge-primary"> Database</span></h1>
<br>
    <div class="container">

        <form action="<?php echo home_url( '/results' ); ?>" method="get" novalidate="novalidate">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
					
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
						<label>Min Price:</label>
                            <input type="number" name="minprice" value="<?php echo $minprice; ?>" class="form-control search-slt" >
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
						<label>Max Price:</label>
                            <input type="number" name="maxprice" value="<?php echo $maxprice; ?>" class="form-control search-slt" >
                        </div>
						
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
						<label>Starost:</label>
                            <select class="form-control search-slt" name="starost_input" id="exampleFormControlSelect1">
								<option hidden >* obavezno polje</option>
								<option value="2">do 2 godine</option>
                                <option value="5">do 5 godina</option>
                                <option value="10">do 10 godina</option>
                                <option value="15">do 15 godina</option>
                                <option value="20">do 20 godina</option>
                            </select>
                        </div>
						
						<div class="col-lg-3 col-md-3 col-sm-12 p-0">
						<label>Stanje:</label>
                            <select class="form-control search-slt" name="stanje_input" id="exampleFormControlSelect2">
								<option hidden >novo / polovno</option>
								<option value="">nebitno</option>	
								<option value="novo">Novo</option>
								<option value="polovno">Polovno</option>							
                            </select>
                        </div>

						<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-12 ">
						<br/>
						<button type="submit" name="" class="btn btn-primary">Pretraga</button>
						</div>
						</div>
						
                    </div>
                </div>
            </div>
        </form>
		

		        <?php
                $args = array(
                    'post_type' => 'post',
					'post_type' => array('post','bookings', 'review'),
                    'posts_per_page' => -1,
                    'meta_query' => array(

                        array(
                            'key' => 'price',
                            'type' => 'NUMERIC',
                            'value' => array($minprice, $maxprice),
                            'compare' => 'BETWEEN'
                        ),

                        array(
                            'key' => 'starost',
							'type' => 'NUMERIC',
                            'value' => $starost_value,
                            'compare' => '<'
                        ),

                        array(
                            'key' => 'stanje',
                            'value' => $stanje_value,
                            'compare' => 'LIKE'
                        )
                    )
                );
                $query = new WP_Query($args);
                while($query -> have_posts()) : $query -> the_post();
        ?>
		
			<div class="col-md-8">
	        <div class="card">
	            <div class="card-body">
	                <div class="row ">
                	    <div class="col-md-3">
                	        <img src="https://img.gaadicdn.com/images/car-images/165x68/Renault/Renault-KWID/4318/047.jpg" alt="">
                	    </div>
                	    <div class="col-md-5">
                	        <h4><?php the_title(); ?></h4>
                	        <a href="<?php the_permalink(); ?>">Poruci odmah!</a>
                	        <ul class="list-unstyled list-inline">
                	            <li class="list-inline-item">Stanje: <?php echo get_post_meta(get_the_ID(), 'stanje', true); ?></li>
                	            <li class="list-inline-item">Starost: <?php echo get_post_meta(get_the_ID(), 'starost', true); ?> god.</li>
                	        </ul>
                	    </div>
                	    <div class="col-md-4">
                	        <h6>Cena: <?php echo get_post_meta(get_the_ID(), 'price', true); ?></h6>
                	        <small>Autor: <?php the_author_posts_link(); ?></small>
							<br>
							<small>Datum: <?php the_time('F j, Y'); ?></small>
                	        <div class="sub-row">
                	            <button type="submit" class="btn btn-primary"><a href="<?php the_permalink(); ?>" style="color: white; text-decoration: none;">Vidi Oglas</a></button>
                	        </div>
                	    </div>
                	</div>
	            </div>
	        </div>	
	    </div>

        <?php endwhile; wp_reset_query(); ?>
    </div>
</section>

