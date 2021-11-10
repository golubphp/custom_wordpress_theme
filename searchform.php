
<div class="card my-4">
  <h5 class="card-header">Pretraga</h5>
  <div class="card-body">
		<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search" >
			<div class="input-group">
			<input type="text" class="form-control" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" id="s" placeholder="Traži ..." >
			
			<span class="input-group-btn">&nbsp;


<button type="submit" class="btn btn-primary" name="submit" id="searchsubmit">
<i class="fas fa-search"></i>
</button>
			</span>
			

		</div>
	</form>
  </div>
</div>


