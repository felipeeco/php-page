<?php
$controller = $this->router->fetch_class();
$method = $this->router->fetch_method();
$user_id = $this->session->userdata('user_id');
?>  



<!--------- sidebar ----------->
<div id="mySidenav" class="sidenav">

<?php

$user_id = $this->session->userdata('user_id');
$sql_users = "SELECT * FROM tbl_users   where  `user_id`='" . $user_id . "'   ";
$query_users = $this->db->query($sql_users);
$user_info = $query_users->result_array();
$user_info = $user_info[0];

$style='';
if($user_info['profile_image']){
	$style= base_url('/assets/uploads/').''.$user_info['profile_image'];
}else{
	 $style= base_url('/assets/frontend/images/no-profile-pic-mobile.jpg');
	
}

if ($user_info['nickname'] != "") {
    $user_info['first_name'] = $user_info['nickname'];
}
?>

		<div class="nav-profile">
			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
			<?php if($user_id!=""){ ?>
			<img src="<?php echo $style; ?>" alt="" width="40">
			<div>
				<h2><?php echo $user_info['first_name']; ?></h2> 
				<a href="<?php echo base_url('user/logout'); ?>" class="logout"><i class="fas fa-sign-out"></i> Logg ut</a>
			</div>
	        <?php } ?>	
		</div>  
		
		<ul class="navbar-nav mr-auto">
		
			<?php if($user_id==""){ ?>
			<li class="nav-item   ">
			<a href="<?php echo base_url('innlogging'); ?>" class="nav-link "><i class="fal fa-user"></i>Logg inn </a>		 
			</li>	
			<?php } ?>	
			
			<li class="nav-item   ">
				<a class="nav-link" href="<?php echo base_url('jobbannonse'); ?>"><i class="fal fa-plus-circle"></i> Legg ut oppdrag</a>
			</li>	
			<li class="nav-item  ">
				<a class="nav-link" href="<?php echo base_url('finn'); ?>"><i class="fal fa-search"></i> Søk</a>
			</li>	
			<li class="nav-item  ">
				<a class="nav-link" href="<?php echo base_url('messages'); ?>"><i class="fal fa-comment"></i> Meldinger</a>
			</li>			
			<li class="nav-item  ">
				<a class="nav-link" href="<?php echo base_url('myjobs'); ?>"><i class="fal fa-suitcase"></i> Mine oppdrag</a>
			</li>
		</ul>	
		
		<?php
		$user_id = $this->session->userdata('user_id');
		if (!empty($user_id)) {
		?>
		<hr>	
		<ul class="navbar-nav mr-auto nav-light">
			<li class="nav-item   ">
				<a class="nav-link" href="<?php echo base_url('profile-setting'); ?>">Profil</a>
			</li>
			
			
			<?php
			if($this->session->userdata('access_label')==6){ 
			?>
			<li class="nav-item   ">
				<a class="nav-link" href="<?php echo base_url('/user/subscription'); ?>">Innstillinger</a>
			</li>
			<?php } ?>
			
			<li class="nav-item   ">
				 <a class="nav-link" href="<?php echo base_url('rating-settings'); ?>">Vurderinger</a>
			</li>
			<?php
			if($this->session->userdata('access_label')==6){ ?>
			<li class="nav-item   ">
			<a class="nav-link" href="<?php echo base_url('user/report'); ?>">Betalinger</a>
			</li>
			<?php } ?>
			<li class="nav-item   ">
				<a class="nav-link" href="<?php echo base_url('var-tjeneste'); ?>">Om oss</a>
			</li>
			<li class="nav-item   ">
				<a class="nav-link" href="<?php echo base_url('tjenesteavtale'); ?>">Tjenesteavtale</a>
			</li>
			<li class="nav-item   ">
				<a class="nav-link" href="<?php echo base_url('kundeservice'); ?>">Kundeservice</a>
			</li>
		</ul>	
		<?php } ?>	
</div>
<!--------- sidebar ----------->
 
 
<!--------- footer menu ----------->
<?php
if ($this->router->fetch_class() != 'messages'){ 
?>



<div class="box-bar d-block d-sm-none">
	<div class="container">
		<div class="row">
		
		<?php
		$user_id = $this->session->userdata('user_id');
		if (!empty($user_id)) {
		?>
			<div class="col-3"><a href="<?php echo base_url('/profile'); ?>" class="link"><span class="icon login"></span><span class="text">Hjem</span></a></div>
		<?php } else { ?>
			<div class="col-3"><a href="<?php echo base_url('innlogging'); ?>" class="link"><span class="icon login"></span><span class="text">Logg inn</span></a></div>
		<?php } ?>
		
			<div class="col-3"><a href="<?php echo base_url('jobbannonse'); ?>" class="link "><span class="icon create-a-job"></span><span class="text">Legg ut oppdrag</span></a></div>

			<div class="col-3"><a href="<?php echo base_url('messages'); ?>" class="link"><span class="icon messages"></span><span class="text">Meldinger<span class="notification-num"></span></span></a></div>

			<div class="col-3"><a href="<?php echo base_url('finn'); ?>" class="link  <?php if ($method == 'index' and $controller == 'browse') {
																							echo 'active';
																						} ?> "><span class="icon browse"></span><span class="text">Søk</span></a></div>

			

		</div>
	</div>
</div>
 

<?php } ?>
 <!--------- footer menu ----------->
 
  