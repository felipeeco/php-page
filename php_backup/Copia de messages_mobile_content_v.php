<?php
function get_icon_html($result_chat_count,$type,$i=0,$helper){
	
	if($result_chat_count>0){
			$html_contact_notification = '<div class="contact-notification">
					<div class="unreadedmessages-alert">'. $result_chat_count .'</div>
				</div>';
	}
	
	if($type=='exclamation'){ 
		$html_contact_notification = '<div data-i="'.$i.'" data-type="'.$type.'"  class="contact-notification">
		<div class="notification-icon attention" data-toggle="tooltip" data-placement="top" data-html="true" data-container=".grey-tooltip" title="" data-original-title="<i class=\'fal fa-exclamation-circle\'></i> Handling kreves">
		<i class="fal fa-exclamation-circle" aria-hidden="true"></i>
		</div>';
		if($result_chat_count>0){
			$html_contact_notification .= '<div class="unreadedmessages-alert">'.$result_chat_count.'</div>'; 
		}  
		$html_contact_notification .= '</div>';  
	}
	
	
	if($type=='clock'){ 
		
		$html_contact_notification = '<div  data-i="'.$i.'"  data-type="'.$type.'"    class="contact-notification">
									<div class="notification-icon await" data-toggle="tooltip" data-placement="top" data-html="true" data-container=".grey-tooltip" title="" data-original-title="<i class=\'fal fa-clock\'></i> Du venter på svar">
										<i class="fal fa-clock" aria-hidden="true"></i>
									</div>';
		if($result_chat_count>0){
			$html_contact_notification .= '<div class="unreadedmessages-alert">'.$result_chat_count.'</div>'; 
		}  
		$html_contact_notification .= '</div>';  
		
	}
	
	if($type=='award'){ 
		
		$award_text='';
		if($helper=='Y'){
		$award_text='Din hjelper';	
		}else{
		$award_text='Du har fått jobben';	
		}
		
		
		$html_contact_notification = '<div data-helper="'.$helper.'" data-i="'.$i.'"  data-type="'.$type.'"    class="contact-notification">
									<div class="notification-icon award" data-toggle="tooltip" data-placement="top" data-html="true" data-container=".grey-tooltip" title="" data-original-title="<i class=\'fas fa-award\'></i> '.$award_text.'">
										<img src="/assets/frontend/images/icons/awarded-job.png" alt="award badge" width="24">
									</div>';
		if($result_chat_count>0){
			$html_contact_notification .= '<div class="unreadedmessages-alert">'.$result_chat_count.'</div>'; 
		}  
		$html_contact_notification .= '</div>';  
	}
	
	
	if($type=='checkCircle'){ 
		
		$html_contact_notification = '<div  data-i="'.$i.'"  data-type="'.$type.'"    class="contact-notification">
										<div class="notification-icon agreed" data-toggle="tooltip" data-placement="top" data-html="true" data-container=".grey-tooltip" title="" data-original-title="<i class=\'fal fa-check-circle\'></i> Befaring avtalt">
											<i class="fal fa-check-circle" aria-hidden="true"></i>
										</div>';
		if($result_chat_count>0){
			$html_contact_notification .= '<div class="unreadedmessages-alert">'.$result_chat_count.'</div>'; 
		}  
		$html_contact_notification .= '</div>';  
	}
	
	
	if($type=='ChatClosed'){ 
		
		
		$html_contact_notification = '<div  data-i="'.$i.'"  data-type="'.$type.'"   class="contact-notification">
										<div class="notification-icon inactive" data-toggle="tooltip" data-placement="top" data-html="true" data-container=".grey-tooltip" title="" data-original-title="<i class=\'fal fa-comment-slash\'></i> Chatten er lukket">
										<i class="fal fa-comment-slash" aria-hidden="true"></i>
									 </div>';
									 
		if($result_chat_count>0){
			$html_contact_notification .= '<div class="unreadedmessages-alert">'.$result_chat_count.'</div>'; 
		}  
		$html_contact_notification .= '</div>'; 
	}
	
	return $html_contact_notification;
}

?>

<div class="meesagesloading">
	<div class="loading-infoholder">
		<img src="/assets/frontend/images/loading-msg.gif" alt="">
		<h1>Åpner chat</h1>
	</div>
</div>


<!------------->
<!------------->


<?php
$controller = $this->router->fetch_class();
$method = $this->router->fetch_method();
$user_id = $this->session->userdata('user_id');
?>  
<!--------- header ----------->
<?php 
$notification_count= "";
if(!empty($notification['Employer']) || !empty($notification['Helper'])){
$notification_count=count($notification['Employer'])+count($notification['Helper']);	
}
?>
<header id="page-header" class="hide-msg-panel">
	<div class="d-flex justify-content-between">
		<div>
			<?php
			$user_id = $this->session->userdata('user_id');
			if ($user_id == NULL) {
			?>
			<a   class="p-0" href="<?php echo base_url(); ?>">
			<?php }else{ ?>
			<a  class="p-0"  href="<?php echo base_url('profile'); ?>">
			<?php } ?> 
			<img src="<?php echo base_url(); ?>assets/frontend/images/logo.svg" alt="" class="logo">
			</a>
		</div>
		<div class="text-right">	
			<?php if($notification_count>0 and $notification_count!=""){?>
			<a  href="#" role="button" id="dropdownNotification" class="dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<i class="fas fa-bell position-relative">				
				<span class="new-notification"></span>				
				</i>
			</a>
			<?php } ?>			
			<a href="javascript:;" aria-label="Toggle navigation" onclick="openNav()" class=""><i class="far fa-bars"></i></a>
			<div class="dropdown-menu dropdown-menu-right dropdown-notification" aria-labelledby="dropdownNotification">
				<div class="notification-container">	
					<?php  
					foreach($notification['Employer'] as $notification_Employer){ 					
					$style = ''; 
								$image = $notification_Employer['galleryid'];
								$image = explode(",", $image);
								$imageid = $image[0];
								$uploaded_file_path = '';
								if ($image[0]) {
									$sql = "SELECT * FROM tbl_gallery where `gallery_id`='" . $imageid . "' ";
									$query = $this->db->query($sql);
									if ($query->num_rows() > 0) {
										foreach ($query->result() as $row) {
											$image_name = $row->name;
											if ($image_name) { 
												$image_name =  "/assets/uploads/" . $image_name;												 
											}
										}
									}
									$uploaded_file_path = $image_name;
								}
								if ($uploaded_file_path == "" and $notification_Employer['jobsubtypeImage'] != "") {
									$uploaded_file_path = base_url() . "assets/uploads/" . $notification_Employer['jobsubtypeImage'] . "";
								}
								if ($uploaded_file_path == "") {
									$uploaded_file_path = base_url() . "assets/frontend/images/missing_image_small.jpg";
								}								 
								$time = '';  
								if($notification_Employer['hire_date']){ 								
									$datetime1 = new DateTime(date("Y-m-d h:i:s"));
									$datetime2 = new DateTime(date("Y-m-d h:i:s",strtotime($notification_Employer['hire_date'])));
									$interval = $datetime1->diff($datetime2); 									
									$time= '';
									if($interval->format('%d')>=1){
										$time .=    $interval->format('%d')." Dager ";
										$time_d =  $interval->format('%d');
									}
									if($interval->format('%h')>=1){
										$time .= $interval->format('%h')." Timer ";
									}
									if($interval->format('%i')>=1){
										$time .= $interval->format('%i')." Minutter ";
									}
									$time .= 'siden'; 
								}								
					?>							
					<a class="dropdown-item" href="<?php echo base_url('rating/' . $notification_Employer['job_id'] . ''); ?>">
								 <div class="notification-info new">
									 <h6>Er jobben utført?  </h6>
									 <p>Gi karakter innen <?php echo $time_d; ?> dager</p>
									 <p class="notification-time">
									 <!--<i class="fas fa-clock"></i> <?php echo $time; ?>-->
									 <?php
									 echo (strlen($notification_Employer['job_title']) <= 40 ? $notification_Employer['job_title'] : substr($notification_Employer['job_title'],0,40).'..'); 
									 ?>
									 </p>
								 </div>
								 <div class="notification-img"><img src="<?php echo $uploaded_file_path; ?>" alt="" /></div>
							</a>
					<?php } ?>
							<?php 
							foreach($notification['Helper'] as $notification_Employer){  
								$style = ''; 
								$image = $notification_Employer['galleryid'];
								$image = explode(",", $image);
								$imageid = $image[0];
								$uploaded_file_path = '';
								if ($image[0]) {
									$sql = "SELECT * FROM tbl_gallery where `gallery_id`='" . $imageid . "' ";
									$query = $this->db->query($sql);
									if ($query->num_rows() > 0) {
										foreach ($query->result() as $row) {
											$image_name = $row->name;
											if ($image_name) { 
												$image_name =  "/assets/uploads/" . $image_name;												 
											}
										}
									}
									$uploaded_file_path = $image_name;
								}
								if ($uploaded_file_path == "" and $notification_Employer['jobsubtypeImage'] != "") {
									$uploaded_file_path = base_url() . "assets/uploads/" . $notification_Employer['jobsubtypeImage'] . "";
								}
								if ($uploaded_file_path == "") {
									$uploaded_file_path = base_url() . "assets/frontend/images/missing_image_small.jpg";
								} 								
								$time = '';  
								if($notification_Employer['hire_date']){ 								
									$datetime1 = new DateTime(date("Y-m-d h:i:s"));
									$datetime2 = new DateTime(date("Y-m-d h:i:s",strtotime($notification_Employer['hire_date'])));
									$interval = $datetime1->diff($datetime2); 									
									$time= '';
									if($interval->format('%d')>=1){
										$time .= $interval->format('%d')." Dager ";
										$time_d =  $interval->format('%d');
									}
									if($interval->format('%h')>=1){
										$time .= $interval->format('%h')." Timer ";
									}
									if($interval->format('%i')>=1){
										$time .= $interval->format('%i')." Minutter ";
									}
									$time .= 'siden'; 
								}
							?>
							<a class="dropdown-item" href="<?php echo base_url('rating/' . $notification_Employer['job_id'] . ''); ?>">
								<div class="notification-info new">
									<h6>Er jobben utført?</i></h6>
									<p>Gi karakter innen <?php echo $time_d; ?> dager</p>
									<p class="notification-time">
									 <?php
									 echo (strlen($notification_Employer['job_title']) <= 40 ? $notification_Employer['job_title'] : substr($notification_Employer['job_title'],0,40).'..'); 
									 ?>
									</p>
								</div>
								<div class="notification-img"><img src="<?php echo $uploaded_file_path; ?>" alt="" /></div>
						    </a>
							<?php } ?>
					
				</div>
			</div>
		</div>
	</div>
</header>
<!--------- header ----------->

<!------------->
<!------------->

<div class="landing hide-msg-panel">		
	<?php echo $nav_content; ?> 
	<div class="titletab"><h1><i class="far fa-comment"></i> Meldinger</h1></div>
</div> 

<div class="content messages hide-msg-panel " >
	<div class="container-fluid">	 
  
	
		<?php		
		
		/**************************************/
		/*********** finding_help *************/
		/**************************************/
	
			$finding_help_html = '';
			$i=0;
			$user_count = 0;
			foreach($finding_help as $finding_help_v){
				
					$sql_offer_help = "SELECT * FROM tbl_offer_help where `job_id`='" . $finding_help_v['job_id'] . "' order by hire_status desc,help_id desc  ";
					$query_offer_help = $this->db->query($sql_offer_help);
					$offer_help_data = $query_offer_help->result_array();
					$offer_help_data= $offer_help_data[0];
					
					if ($offer_help_data['cancel_hire_status'] == '1' and $offer_help_data['expire_hire_status_confirm'] == '0') {
						continue;
					}
				
				
					if($finding_help_v['job_offer_type']=='helpers_only'){ continue; }				
					$image_name="";					
					$image=$finding_help_v['galleryid'];
					$image= explode(",",$image); 
					$imageid = $image[0];					
					if($image[0]){ 
						$sql ="SELECT * FROM tbl_gallery where `gallery_id`='".$imageid."' ";
						$query = $this->db->query($sql);
						if ($query->num_rows() > 0) {
							foreach ($query->result() as $row) { 
								 if($row->name!=""){
									$image_name=$row->name; 	
								 $image_name=  "/assets/uploads/".$image_name; 
								 }
							}
						}					 
					} 
					if($image_name==""){
						$uploaded_file_path = '<i class="fas fa-image no-img" aria-hidden="true"></i>';
					}else{ 
						$uploaded_file_path= '<img src="'.$image_name.'" alt="">';; 
					} 
					$job_title = $finding_help_v['job_title'];
					if (strlen($job_title) > 16) {
						mb_internal_encoding("UTF-8");
						$job_title = mb_substr($finding_help_v['job_title'], 0, 15) . "..";
					} 		
					$i++; 
					$selected = '';
					if ($i == 1 and $_REQUEST['job_id']=="" and $_REQUEST['invite_id']=="") {
						$selected = 'selected-listing selected';
					} 
					if ($_invite_helper['nickname'] != "")
					{
						$_invite_helper['first_name'] = $_invite_helper['nickname'];
					}
					
					$offer_price = '';
					$payment_type = $_invite_helper['payment_type'];
					$amount = 0;
					if ($payment_type == 'total' and $_invite_helper['total_payment'] != "")
					{
						$status_hourly = 'N';
						$amount = $_invite_helper['total_payment'];
					}
					elseif ($payment_type == 'proposals_wanted')
					{
						$status_hourly = 'N';
						$amount = 'Tilbud ønskes';
					}
					else if ($_invite_helper['payment_per_hour'] != "")
					{
						$status_hourly = 'Y';
						$amount = $_invite_helper['payment_per_hour'] . "/time ";
					} 
							
							
					
							
							
						$finding_help_html .= '	
						
											  <div class="contact-conversation find-help listing-user-id" data-job_id="' . $finding_help_v['job_id'] . '"   data-type="find_help">
													<div class="profile-picture">
														'.$uploaded_file_path.'
													</div>
													<div class="contact-details">
														<img src="' . base_url() . '/assets/frontend/images/icons/search-icon.gif" alt="Search Icon">
														<h5>Finner hjelp… </h5>
														<span class="jobtitle">' . $job_title . '</span>
													</div>
												</div>
											  
											  ';	
							
			} 

		/**************************************/
		/*********** finding_help *************/
		/**************************************/
		
		
		
		
		/**************************************/
		/*********** invite_helper ************/
		/**************************************/
		
		$invite_helper_html='';
			
		if ($invite_helper) {
			foreach ($invite_helper as $_invite_helper) {
				$selected = '';
				$helper = 'Y';
				if ($login_user_id == $_invite_helper['helper_user_id']) {
					$_invite_helper['user_id'] = $_invite_helper['job_user_id'];
					$_invite_helper['nickname'] = $_invite_helper['job_nickname'];
					$_invite_helper['first_name'] = $_invite_helper['job_first_name'];
					$_invite_helper['last_name'] = $_invite_helper['job_last_name'];
					$_invite_helper['profile_image'] = $_invite_helper['job_profile_image'];
					$helper = 'N';
				}
				if ($helper == 'Y' and $_invite_helper['expire_hire_status'] == 1 and $_invite_helper['from_helper'] == 0) {
					continue;
				}
				if ($helper == 'N' and $_invite_helper['expire_hire_status'] == 1 and $_invite_helper['from_helper'] == 1) {
					continue;
				}

				
				if ($_invite_helper['profile_image'] == "") {
					$_invite_helper['profile_image'] = 'no-profile-pic.jpg';
				}
				$i++;
				$invite_id = $_REQUEST['invite_id'];
				$selected = '';
				if ($invite_id == $_invite_helper['invite_id'] and $_REQUEST['chat_id'] == "") {
					$selected = 'selected-listing selected';
				} else if ($i == 1 and $_REQUEST['chat_id'] == "" and $_REQUEST['invite_id'] == "") {
					$selected = 'selected-listing selected';
				}
				
				if ($_invite_helper['nickname'] != "") {
					$_invite_helper['first_name'] = $_invite_helper['nickname'];
				}
				$job_title = $_invite_helper['job_title'];
				if (strlen($job_title) > 16) {
					mb_internal_encoding("UTF-8");
					$job_title = mb_substr($_invite_helper['job_title'], 0, 15) . "..";
				}	

				$offer_price = '';
				$payment_type = $_invite_helper['payment_type'];
				$amount = 0;
				if ($payment_type == 'total' and $_invite_helper['total_payment'] != "") {
					$status_hourly = 'N';
					$amount = $_invite_helper['total_payment'];
				} elseif ($payment_type == 'proposals_wanted') {
					$status_hourly = 'N';
					$amount = 'Tilbud ønskes';
				} else if ($_invite_helper['payment_per_hour'] != "") {
					$status_hourly = 'Y';
					$amount = $_invite_helper['payment_per_hour'] . "/time ";
				}
				
				 if ($_invite_helper['profile_image'] == "") {
					$_invite_helper['profile_image'] = 'no-profile-pic.jpg';
				}
				
				$extra_class_listing='';
				if($_invite_helper['expire_hire_status'] == '1'){					 
					 $html_contact_notification = 	get_icon_html($result_chat_count,'ChatClosed',15,$helper);	
					$extra_class_listing = 'inactive';	
				 }else{
					if($helper=="N"){
					  $html_contact_notification = 	get_icon_html($result_chat_count,'exclamation',14,$helper);
					}else{
					  $html_contact_notification = 	get_icon_html($result_chat_count,'clock',15,$helper);	
					}
				 }
				
				$user_data_html = '<a href="javascript:;"><div class="'.$i.' contact-conversation listing-user-id '.$selected.' '.$extra_class_listing.'" data-user_id="'.$_invite_helper['job_user_id'].'" data-job_id="'.$_invite_helper['job_id'].'" data-helper="'.$helper.'" data-invite_id="'.$_invite_helper['invite_id'].'" data-first_name="'.$_invite_helper['first_name'].'" data-img="'.base_url('/assets/uploads/') . '' . $_invite_helper['profile_image'].'" data-type="invite"  >
					
						<img src="'.base_url('/assets/uploads/') . '' . $_invite_helper['profile_image'].'" alt="">
						 
						<div class="contact-details">
							<h5>'.$_invite_helper['first_name'].'</h5>
							<p class="jobtitle">'.$job_title.'</p>
						</div>
						'.$html_contact_notification.'
						</div></a>';
				
				 
				
				
				if($_invite_helper['expire_hire_status'] == 1){ 
					   $user_data_html_ChatClosed_2 .= $user_data_html;  
				   }else{ 
						if($helper=="N"){
							$user_data_html_exclamation_2 .= $user_data_html; 
						}else{
							$user_data_html_clock_2 .= $user_data_html; 
						} 
			    }
				
				
			}
		}


		/**************************************/
		/*********** invite_helper ************/
		/**************************************/
		
		
		
		
		
		
			/**************************************/
			/************* user_data **************/
			/**************************************/
			
			$user_data_html = '';
			
			$user_data_html_1 = ''; 
			$user_data_html_2 = ''; 
			$user_data_html_3 = ''; 
			$user_data_html_4 = ''; 
			$user_data_html_5 = ''; 
			$user_data_html_6 = ''; 
			$user_data_html_last = '';
			
			if (count($user_data) > 0) {
                foreach ($user_data as $v_user_data) {
                    $helper = 'Y';
                    if ($login_user_id == $v_user_data['user_id']) {
                        $v_user_data['user_id'] = $v_user_data['job_user_id'];
                        $v_user_data['nickname'] = $v_user_data['job_nickname'];
                        $v_user_data['first_name'] = $v_user_data['job_first_name'];
                        $v_user_data['last_name'] = $v_user_data['job_last_name'];
                        $v_user_data['profile_image'] = $v_user_data['job_profile_image'];
                        $helper = 'N';
                    }
                    $job_id = $v_user_data['job_id'];
					
                    $sql_offer_help = "SELECT * FROM tbl_offer_help where `job_id`='" . $job_id . "' order by hire_status desc,help_id desc  ";
                    $query_offer_help = $this->db->query($sql_offer_help);
                    $offer_help_datas = $offer_help_data = $query_offer_help->result();
                    $offer_help_data_helper = array();
                    if (!empty($offer_help_data)) {
                        $offer_help_data = (array)$offer_help_data[0];
                        if ($offer_help_data['hire_status'] == 1) {
                            if ($helper == 'Y') {
                                if ($offer_help_data['hire_status'] == "1" and $v_user_data['hire_status'] != 1) {
                                    continue;
                                }
                            } else if ($offer_help_data['hire_status'] == 1 and $v_user_data['hire_status'] != 1) {
                                $sql_offer_help_helper = "SELECT * FROM tbl_offer_help where `job_id`='" . $job_id . "' and `user_id`='" . $login_user_id . "' order by hire_status desc,help_id desc  ";
                                $query_offer_help_helper = $this->db->query($sql_offer_help_helper);
                                $offer_help_data_helper = $query_offer_help_helper->result();
                                $offer_help_data_helper = (array)$offer_help_data_helper[0];
                                if ($offer_help_data_helper['expire_hire_status'] != '1') {
                                    continue;
                                }
                            }
                        } else {
                            if ($helper == 'N') {
                                $sql_offer_help_helper = "SELECT * FROM tbl_offer_help where `job_id`='" . $job_id . "' and  `orderId`='" . $v_user_data['orderId'] . "' order by hire_status desc,help_id desc  ";
                                $query_offer_help_helper = $this->db->query($sql_offer_help_helper);
                                $offer_help_data_helper = $query_offer_help_helper->result_array();
                                $offer_help_datas_helper = $offer_help_data_helper = $offer_help_data_helper[0];
                                if ($offer_help_data_helper['offer_cancel_by_helper'] == 1) {
                                    continue;
                                }
                            }
                        }
                    }
                    
                    

					if ($helper == 'N') {
						
                        $sql_payment = "SELECT * FROM tbl_payment where `job_id`='" . $offer_help_data['job_id'] . "' and `user_id`='" . $login_user_id . "' and (`status`='CAPTURE' OR `status`='RESERVE'  OR `status`='VOID'  ) ";
                        $query_payment = $this->db->query($sql_payment);
                        $payment_data = $query_payment->result();
                        if (empty($payment_data) and $offer_help_data_helper['expire_hire_status'] != '1') {
                            continue;
                        }
                        /* if ($v_user_data['cancel_hire_status'] == 1 || $v_user_data['cancel_hire_status_confirm'] == 1) {
                            continue;
                        } 
						*/
						
						if ($v_user_data['cancel_hire_status'] == 1 and  $v_user_data['action_by'] != 'jobowner') {
                            continue;
                        }else if ($v_user_data['cancel_hire_status'] == 1 and $v_user_data['cancel_hire_status_confirm'] == 1) {
                            continue;
                        } 
						
						
						
					}else{ 
						
                        if ($v_user_data['cancel_hire_status'] == 1 and  $v_user_data['action_by'] == 'jobowner') {
                            continue;
                        }
						
					}
					
						
					if ($helper == 'N') {
						 
                    } else {
                        if ($v_user_data['cancel_hire_status'] != 1 and $v_user_data['expire_hire_status'] != 1) {
                            $sql_payment = "SELECT * FROM tbl_payment where `job_id`='" . $job_id . "' and `user_id`='" . $v_user_data['user_id'] . "' and (`status`='CAPTURE' OR `status`='RESERVE'  ) ";
                            $query_payment = $this->db->query($sql_payment);
                            $payment_data = $query_payment->result();
                            if (empty($payment_data)) {
                                continue;
                            }
                        }
                        if (($v_user_data['expire_hire_status'] == 1 and $v_user_data['offer_cancel_by_helper'] == 1)) {
                        } else if ($v_user_data['cancel_status'] == 1 || $v_user_data['deletion_status'] == 1 || $v_user_data['expire_hire_status'] == 1) {
                            continue;
                        }
                    }
                    if ($v_user_data['complete_date'] != "" and $v_user_data['complete_status'] == 'complete') {
                        $complete_date = ($v_user_data['complete_date']);
                        $CurrentDate = date("Y-m-d H:i:s", strtotime('today - 30 days'));
                        if ($complete_date < $CurrentDate) {
                            continue;
                        }
                    }  

					
                    $i++;
                    $selected = '';
                    $jobbb_id = $_REQUEST['job_id'];
                    $invite_id = $_REQUEST['invite_id'];
                    if ($i == 1 and $chat_id == "" and $invite_id == "") {
                        $selected = 'selected-listing selected';
                    } else if ($chat_id != "" and $jobbb_id != "" and $invite_id == "") {
                        if ($chat_id == $v_user_data['user_id'] and $jobbb_id == $v_user_data['job_id']) {
                            $selected = 'selected-listing selected trigger-selected-listing ';
                        }
                    } else if ($chat_id != "" and $invite_id == "") {
                        if ($chat_id == $v_user_data['user_id']) {
                            $selected = 'selected-listing selected';
                        }
                    }
                    if ($v_user_data['profile_image'] == "") {
                        $v_user_data['profile_image'] = 'no-profile-pic.jpg';
                    } 
					
					$orderId = $v_user_data['orderId']; 

					if ($v_user_data['nickname'] != "") {
						$v_user_data['first_name'] = $v_user_data['nickname'];
					}
					
					 $job_title = $v_user_data['job_title'];
					if (strlen($job_title) > 16) {
						mb_internal_encoding("UTF-8");
						$job_title = mb_substr($v_user_data['job_title'], 0, 15) . "..";
					}
					
					
					$html_contact_notification ='';
					$Meldinger = '';
					$extra_class_listing = '';
					
					
                    $user_id = $this->session->userdata('user_id');
                    
					$sql_chat_count = "SELECT count(*) as count FROM tbl_chats where `user_id`='" . $user_id . "' and `from_user_id`='" . $v_user_data['user_id'] . "' and `job_id`='" . $v_user_data['job_id'] . "'  and `is_read`='0' ";
					$query_chat_count = $this->db->query($sql_chat_count);
					$result_chat_count = $query_chat_count->result_array();
					if(!empty($result_chat_count)){
						$result_chat_count = $result_chat_count[0];
						$result_chat_count = $result_chat_count['count'];
					}
					
					
					/* and `user_id`='" . $v_user_data['user_id'] . "' */
					
					$sql_offer = "SELECT * FROM tbl_payment where `orderId`='" . $orderId . "'   ";
					$query_offer = $this->db->query($sql_offer);
					$offer_data = $query_offer->result();
					$offer_data = $offer_data[0];
					
					
					/*********notification*********/
					  
					$chat_notification_status = 'none';  
					  
					/**********1*******/  
					if($result_chat_count>0){ 
					
						$html_contact_notification = 	get_icon_html($result_chat_count,'none',1,$helper);
					}
					/**********1*******/  
					
					/**********2*******/  
					$sql_offer_help_datas = "SELECT * FROM tbl_offer_help where `job_id`='" . $job_id . "' and `orderId`='" . $orderId . "' order by hire_status desc,help_id desc  ";
					$query_offer_help_datas = $this->db->query($sql_offer_help_datas);
					$offer_help_data_datas = $query_offer_help_datas->result();
					
					if($offer_help_data_datas[0]->hire_approval==1  and $offer_help_data_datas[0]->hire_status==1)
					{	 
						$html_contact_notification = 	get_icon_html($result_chat_count,'award',2,$helper);
						$chat_notification_status = 'award';  
							
					}else  if($offer_help_data_datas[0]->cancel_hire_status==1  OR $offer_help_data_datas[0]->expire_hire_status==1   OR $offer_help_data_datas[0]->offer_cancel_by_helper==1   OR $offer_help_data_datas[0]->deletion_status==1  OR $v_user_data['cancel_status'] == 1    ){	
						
						$html_contact_notification = 	get_icon_html($result_chat_count,'ChatClosed',10,$helper);
						$extra_class_listing = 'inactive';
						$chat_notification_status = 'ChatClosed';  
					
					}else  if ($offer_data->offerprice != "" and $offer_data->is_not_accept == 1   ) { 
								 
						if($offer_data->user_id == $v_user_data['user_id'] ){	
							$html_contact_notification = 	get_icon_html($result_chat_count,'exclamation',3,$helper);
							$chat_notification_status = 'exclamation';  
							
						}else{
							$html_contact_notification = 	get_icon_html($result_chat_count,'clock',4,$helper);
							$chat_notification_status = 'clock';  
						}
					}else{ 
						
						if($offer_help_datas[0]->hire_approval==1  and $offer_help_datas[0]->user_id==$v_user_data['user_id'])
						{	 
							$html_contact_notification = 	get_icon_html($result_chat_count,'clock',5,$helper);
							$chat_notification_status = 'clock';  
								
						}
						else if($offer_help_datas[0]->hire_approval==1  and $offer_help_datas[0]->user_id==$user_id)
						{
							
							$html_contact_notification = 	get_icon_html($result_chat_count,'exclamation',6,$helper);
							$chat_notification_status = 'exclamation';  
							
						}else{
						
						
						/**tbl_inspection_request**/
						$sql_inspection_request_count = "SELECT count(*) as count FROM tbl_inspection_request where `user_id`='" . $user_id . "' and `from_user_id`='" . $v_user_data['user_id'] . "' and `job_id`='" . $v_user_data['job_id'] . "'  and `is_delete`='0' and `accept_confirm`=0 ";
						$query_inspection_request_count = $this->db->query($sql_inspection_request_count);
						$result_inspection_request_count = $query_inspection_request_count->result_array();
						if(!empty($result_inspection_request_count)){
							$result_inspection_request_count = $result_inspection_request_count[0];
							$result_inspection_request_count = $result_inspection_request_count['count'];
						} else{
							$result_inspection_request_count =0;
						}
						
						
						$sql_inspection_request_accept_count = "SELECT count(*) as count FROM tbl_inspection_request where ( (`user_id`='" . $user_id . "' and `from_user_id`='" . $v_user_data['user_id'] . "') OR (`from_user_id`='" . $user_id . "' and `user_id`='" . $v_user_data['user_id'] . "')    ) and `job_id`='" . $v_user_data['job_id'] . "'  and `is_delete`='0' and `accept_confirm`=1 ";
						$query_inspection_request_accept_count = $this->db->query($sql_inspection_request_accept_count);
						$result_inspection_request_accept_count = $query_inspection_request_accept_count->result_array();
						if(!empty($result_inspection_request_accept_count)){
							$result_inspection_request_accept_count = $result_inspection_request_accept_count[0];
							$result_inspection_request_accept_count = $result_inspection_request_accept_count['count'];
						}else{
							$result_inspection_request_accept_count =0;
						}
						
						if($result_inspection_request_accept_count>0)
						{ 
						
							$html_contact_notification = 	get_icon_html($result_chat_count,'checkCircle',7,$helper);
							$chat_notification_status = 'checkCircle';  
						
						}else if($result_inspection_request_count>0)
						{  
							$html_contact_notification = 	get_icon_html($result_chat_count,'exclamation',8,$helper);
							$chat_notification_status = 'exclamation';  
							
						}else{
						
							/**/
							
							$sql_inspection_request_count = "SELECT count(*) as count FROM tbl_inspection_request where `from_user_id`='" . $user_id . "' and `user_id`='" . $v_user_data['user_id'] . "' and `job_id`='" . $v_user_data['job_id'] . "'  and `is_delete`='0' and `accept_confirm`=0 ";
							$query_inspection_request_count = $this->db->query($sql_inspection_request_count);
							$result_inspection_request_count = $query_inspection_request_count->result_array();
							if(!empty($result_inspection_request_count)){
								$result_inspection_request_count = $result_inspection_request_count[0];
								$result_inspection_request_count = $result_inspection_request_count['count'];
							}else{
							$result_inspection_request_count =0;
						} 
							
							if($result_inspection_request_count>0)
							{  
								
								$html_contact_notification = 	get_icon_html($result_chat_count,'clock',9,$helper);
								$chat_notification_status = 'clock';  
							}
						
							/**/
							
						}
						/**tbl_inspection_request**/
						
						}
						
						
						
					} 
					
					/**********2*******/  
					
					
					
					
					/*********notification*********/
					 
							
					/* online */		
				   $online_status = '';
				   $online_status_html = '<i class="fas fa-circle user-status '.$online_status.'" aria-hidden="true"></i>';
				   $online_status_html = '';
					
				   $user_data_html='';	
                   $user_data_html .= '<div class="'.$i.' contact-conversation listing-user-id '.$selected.'  '.$extra_class_listing.' " data-help_id="'.$v_user_data['help_id'].'" data-user_id="'.$v_user_data['user_id'].'" data-job_id="'.$v_user_data['job_id'].'" data-helper="'.$helper.'" data-orderId="'.$v_user_data['orderId'].'" data-first_name="'.$v_user_data['first_name'].'" data-img="'.base_url('/assets/uploads/') . '' . $v_user_data['profile_image'].'" data-type="job"   data-hire="'.$offer_help_data['hire_status'].'" >
                        <a href="javascript:;">
							
							<div class="profile-picture">
								<img src="'.base_url('/assets/uploads/') . '' . $v_user_data['profile_image'].'" alt="">
								'.$online_status_html.'
							</div>
							
                            <div class="contact-details">
                                <h5>'.$v_user_data['first_name'].''; 
									
                                    if ($offer_data->i_am_profesional == 1) {
										$user_data_html .= ' <img src="' . base_url() . '/assets/frontend/images/icons/sm-pro-badge.svg" class="profile-badge-sm" alt="Professional Bagde"><span class="profile-badge-tooltip pro-badge">Fagmann</span>
										';
                                    }
                                    
							$user_data_html .='</h5>
                                <span class="jobtitle">'.$job_title.'</span>
                            </div>'; 
							
							$user_data_html .= $html_contact_notification;								
						
                            
                        $user_data_html .= '</a>
                    </div>';
					
					
					
					
					if($chat_notification_status=="exclamation"){
						
						if($result_chat_count>0){
							$user_data_html_exclamation_1 .= $user_data_html; 	
						}else{
							$user_data_html_exclamation_2 .= $user_data_html; 
						}
						
					}else  if($chat_notification_status=="clock"){
						
						if($result_chat_count>0){
							$user_data_html_clock_1 .= $user_data_html; 	
						}else{
							$user_data_html_clock_2 .= $user_data_html; 
						}
						
					}else if($chat_notification_status=="award"){
						
						if($result_chat_count>0){
							$user_data_html_award_1 .= $user_data_html; 	
						}else{
							$user_data_html_award_2 .= $user_data_html; 
						}
						
					}else if($chat_notification_status=="checkCircle"){
						
						if($result_chat_count>0){
							$user_data_html_checkCircle_1 .= $user_data_html; 	
						}else{
							$user_data_html_checkCircle_2 .= $user_data_html; 
						}
						
					}else  if($chat_notification_status=="ChatClosed"){
						
						if($result_chat_count>0){
							$user_data_html_ChatClosed_1 .= $user_data_html; 	
						}else{
							$user_data_html_ChatClosed_2 .= $user_data_html; 
						}
						
					}else{
						
						if($result_chat_count>0){
							$user_data_html_last_1 .= $user_data_html; 	
						}else{
							$user_data_html_last_2 .= $user_data_html; 
						}
						
					}
					
					
					
                }
            }

			/**************************************/
			/************* user_data **************/
			/**************************************/
			
			
			
		
		
		if( $finding_help_html!=""  || $invite_helper_html!="" || $user_data_html!="" ){
			$user_count = 1;
		}  
			
	
		if ($user_count == 1) 
		{	
		?>
		<div class="row">	 
			<div class="col-12 conversations"> 
				<div class="contacts-holder scrollable">
					
					<?php
					echo $finding_help_html; 
					echo $invite_helper_html;  
									 
					echo $user_data_html_exclamation_1; 
					echo $user_data_html_exclamation_2;

					echo $user_data_html_award_1; 
					echo $user_data_html_award_2;	

					echo $user_data_html_checkCircle_1; 
					echo $user_data_html_checkCircle_2;				

					echo $user_data_html_clock_1; 
					echo $user_data_html_clock_2;   
					
					echo $user_data_html_last_1;  
					echo $user_data_html_last_2;

					echo $user_data_html_ChatClosed_1; 
					echo $user_data_html_ChatClosed_2; 
					?> 
					
					
				</div>
			</div>
		</div>	
		<?php } 
		
		if ($user_count == 0) {
			?>
				
			
			<div class="nocontact-info">
				<img src="<?php echo base_url(); ?>assets/frontend/images//icons/user-chat.svg" class="user-img">
				<h2>Du har ingan kontakter akkurat nå..</h2>
				<p>Interesserte hjelpere vil bli lagt til i kontaktlisten din når du legger ut en småjobb. Om du er en hjelper og ser etter arbeid vil oppdragsgivere du kontakter bli lagt til kontaktlisten din.</p>
				<p class="line-text">Kom i gang!</p>
				<div> 
					<a href="<?php echo base_url('jobbannonse'); ?>" class="btn btn-primary primary-dark mr-3"><i class="fas fa-flag" aria-hidden="true"></i> Legg ut jobb</a>
					<a href="<?php echo base_url('finn'); ?>" class="btn btn-primary"><i class="fas fa-search" aria-hidden="true"></i> Finn en jobb</a>
				</div>
			</div> 				
				
			<?php	
		}
		
		?> 
		
	</div>
</div>


<?php
 

if ($user_count > 0)
{
?> 

<div class="frame" id="chatdata"  style="display:none;" >
	<div class="header-chat">
		<a href="javascript:;" class="mobile-get-user-list"><i class="fas fa-arrow-left"></i></a>
		
		<!-------------------->
		<div class="chatinformation" id="chat-info">  

		</div>
		<a href="javascript:;" class="details btn-side-other-info  "><i class="fas fa-list-ul" aria-hidden="true"></i></a>
		<!-------------------->
		
	 
		
		
		
		
	</div>    
	<ul class="chat-content" id="chat-content-data"  >
	
	</ul>
	
	<div class="input-chat chat-input" id="bottomChat">
		<div class="msj-rta macro">                        
			<div class="text text-r">
				<textarea data-resizemobile name="message" id="message" placeholder="Skriv din melding her..." class=""></textarea>
			</div> 

			<div>
		
				<div class="footer-btn mobile-footer-btn">
					<button type="button" class="btn_upload_attachment"><i class="far fa-paperclip" data-toggle="tooltip" data-placement="top" title="" data-container=".chat-input" aria-hidden="true" data-original-title=""></i><span class="sr-only">Send a File</span></button>
					<input type="file" class="form-control-file hide  upload_attachment" id="upload_attachment" data-id="101" image-name="upload_attachment">
					
					<button type="button" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="footer-menu-dropdown"><i class="far fa-times" data-toggle="tooltip" data-placement="top" title="" data-container=".chat-input" aria-hidden="true" data-original-title=""></i><span class="sr-only">More Options</span></button>
					<div class="dropdown-menu" id="footer-dropdown" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(38px, 40px, 0px);">
					
						
						
						<button type="button" class="action-get-calculatorModal" >kalkulator <i class="fal fa-calculator" aria-hidden="true"></i></button>
						
						<button type="button" class="btn_readContract action-chat-appointment" data-contentpopup="comming" ><span>Lag avtale</span> <i class="fal fa-file-signature" aria-hidden="true"></i></button>
						
						<button type="button" class=" action-triggeraction-1 "  ><span>Slett kontakt</span> <i class="fal fa-ban" aria-hidden="true"></i></button>
						
						
						<button type="button" class="btn_readContract1 action-report-user" data-content-bk="comming">Rapporter  <i class="fal fa-exclamation-circle" aria-hidden="true"></i></button>
						<button type="button" class="btn_readContract11 action-inspection-chat"  data-content-bk="comming">Avtal befaring <i class="fal fa-file-search" aria-hidden="true"></i></button>
					</div>
					<a href="javascript:;"  class="enter-msg send-msg-mobile" >
						<span class=" glyphicon glyphicon-share-alt"><i class=" fas fa-paper-plane"></i></span>
					</a>
				</div>
			
			</div>  

		</div>
			
		  <!--------->
	 	<div class="message-footer" id="action-message-footer" >
			
		</div>
	  <!--------->
		
		              
	</div>
</div>  

<?php
}
else
{
 

} 
?>


<!-------------------------------------->


<!-------------------------------------->
<!-- style="display:none;"-->
<div id="job-details-info" class="messages" style="display:none;"  >



</div>
<!-------------------------------------->


 
 


<!------------------- bannotpossible ------------------->
 
<div class="modal fade paddmeoff" id="bannotpossible">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				<div class="white-box information-popup" id="bannotpossible-content">
					 
				</div>
			</div>
		</div>
	</div>
</div>
 
<!------------------- bannotpossible ------------------->

<?php /*
<div class="modal fade job-h1-data " id="map-job">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" aria-label="Close" data-dismiss="modal">
					<svg xmlns="http://www.w3.org/2000/svg" width="39.456" height="39.456" viewBox="0 0 39.456 39.456">  <g id="Grupo_88" data-name="Grupo 88" transform="translate(19.728) rotate(45)">    <path id="Trazado_87" data-name="Trazado 87" d="M16.206,9.231H12.719V5.744a1.744,1.744,0,0,0-3.487,0V9.231H5.744a1.744,1.744,0,0,0,0,3.487H9.231v3.487a1.744,1.744,0,0,0,3.487,0V12.719h3.487a1.744,1.744,0,0,0,0-3.487Z" transform="translate(2.975 2.975)" fill="rgba(255,255,255,0.44)"/>    <path id="Trazado_88" data-name="Trazado 88" d="M13.95,0A13.95,13.95,0,1,0,27.9,13.95,13.95,13.95,0,0,0,13.95,0Zm0,24.412A10.462,10.462,0,1,1,24.412,13.95,10.462,10.462,0,0,1,13.95,24.412Z" fill="rgba(255,255,255,0.44)"/>  </g></svg>
				</button>
			</div>
			<div class="modal-body" id="map-modal-body">
			
				
			</div>
		</div>
	</div>
</div>
*/ ?>

<!----------------------------------->









<!----------------- after payment --------->
<?php
$payment_offer = $this->session->userdata('payment_offer');
$payment_option_type = $this->session->userdata('payment_option_type');
if ($payment_offer == 'yes') {
    $this->session->unset_userdata('success_payment');
}

$success_payment = $this->session->userdata('success_payment');
if ($success_payment != "") {
	
	/*
?>
    <div class="modal fade" id="success_payment">
        <?php
        $user_id = $job_info['user_id'];
        $sql = "SELECT * FROM tbl_users where `user_id`='" . $job_info['user_id'] . "' ";
        $query = $this->db->query($sql);
        $chat_user_data = $query->result();
        $chat_user_data = (array)$chat_user_data[0];
        $user_id = $this->session->userdata('user_id');

        $payment_job_type = $this->session->userdata('payment_job_type');
        $this->session->unset_userdata('payment_job_type');
        ?>
        <?php if ($success_payment == "yes") { ?>
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <a class="navbar-brand" href="javascript:;">
                            <img src="/assets/frontend/images/logo.svg" alt="MinSmåjobb" style="width: 223.19px;height: 38.56px;" />
                        </a>
                        <button type="button" class="close" aria-label="Close" data-dismiss="modal">
                            <svg xmlns="http://www.w3.org/2000/svg" width="39.456" height="39.456" viewBox="0 0 39.456 39.456">
                                <g id="Grupo_88" data-name="Grupo 88" transform="translate(19.728) rotate(45)">
                                    <path id="Trazado_87" data-name="Trazado 87" d="M16.206,9.231H12.719V5.744a1.744,1.744,0,0,0-3.487,0V9.231H5.744a1.744,1.744,0,0,0,0,3.487H9.231v3.487a1.744,1.744,0,0,0,3.487,0V12.719h3.487a1.744,1.744,0,0,0,0-3.487Z" transform="translate(2.975 2.975)" fill="rgba(255,255,255,0.44)" />
                                    <path id="Trazado_88" data-name="Trazado 88" d="M13.95,0A13.95,13.95,0,1,0,27.9,13.95,13.95,13.95,0,0,0,13.95,0Zm0,24.412A10.462,10.462,0,1,1,24.412,13.95,10.462,10.462,0,0,1,13.95,24.412Z" fill="rgba(255,255,255,0.44)" />
                                </g>
                            </svg>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-content">
                            <div class="success-message bottom-sharp-corner">
                                <div class="white-box">
                                    <div class="sucessiconvipps">
                                        <?php
                                        if ($payment_option_type == 'strex') {
                                        ?>
                                            <img src="/assets/frontend/images/strex-logo.png">
                                        <?php
                                        } else {
                                        ?>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="126.752" height="26.677" viewBox="0 0 126.752 26.677">
                                                <g id="Grupo_2617" data-name="Grupo 2617" transform="translate(-664.422 -205.797)">
                                                    <path id="Trazado_499" data-name="Trazado 499" d="M13.5-23.2A13.078,13.078,0,0,0,.422-10.125,13.078,13.078,0,0,0,13.5,2.953,13.078,13.078,0,0,0,26.578-10.125,13.078,13.078,0,0,0,13.5-23.2Zm0,2.531A10.541,10.541,0,0,1,24.047-10.125,10.541,10.541,0,0,1,13.5.422,10.541,10.541,0,0,1,2.953-10.125,10.541,10.541,0,0,1,13.5-20.672Zm7.394,6.87L19.705-15a.633.633,0,0,0-.895,0L11.356-7.61,8.2-10.788a.633.633,0,0,0-.895,0L6.11-9.6a.633.633,0,0,0,0,.895l4.787,4.826a.633.633,0,0,0,.895,0l9.1-9.028A.633.633,0,0,0,20.894-13.8Z" transform="translate(664 229)" fill="#ff5b24" />
                                                    <g id="vipps-logo" transform="translate(704.869 210.19)">
                                                        <path id="Trazado_497" data-name="Trazado 497" d="M11.614.89,7.951,11.6,4.259.891h-4.3L6.341,16.777H9.532L15.916.89ZM30.46,5.434a2.165,2.165,0,1,1-2.165-2.147A2.124,2.124,0,0,1,30.46,5.434m-5,8.783c2.692,0,4.219-1.294,5.662-3.166.777-1.019,1.8-1.212,2.5-.661.749.578.777,1.625,0,2.643a9.951,9.951,0,0,1-8.16,4.405c-3.719,0-6.911-2.037-9.214-5.534a1.728,1.728,0,0,1,.222-2.451,1.718,1.718,0,0,1,2.443.688c1.665,2.423,3.8,4.075,6.55,4.075M40.7,8.793c0,3.249,1.887,4.956,4,4.956,2,0,4.052-1.6,4.052-4.956,0-3.3-2.054-4.9-4.025-4.9C42.59,3.892,40.7,5.406,40.7,8.793Zm0-7.875V3.094A6.21,6.21,0,0,1,45.948.478c3.109,0,6.744,2.588,6.744,8.122,0,5.782-3.5,8.591-7.078,8.591A5.828,5.828,0,0,1,40.7,14.685v7.6H36.789V.918H40.7ZM59.493,8.793c0,3.249,1.887,4.956,4,4.956,2,0,4.052-1.6,4.052-4.956,0-3.3-2.054-4.9-4.024-4.9-2.137,0-4.024,1.514-4.024,4.9Zm0-7.875V3.094A6.209,6.209,0,0,1,64.738.478c3.109,0,6.744,2.588,6.744,8.122,0,5.782-3.5,8.591-7.078,8.591a5.828,5.828,0,0,1-4.912-2.506v7.6H55.58V.918h3.913Z" transform="translate(0 -0.001)" fill="#ff5b24" fill-rule="evenodd" />
                                                        <g id="Grupo_2616" data-name="Grupo 2616" transform="translate(73.094 0.477)">
                                                            <path id="Trazado_498" data-name="Trazado 498" d="M6.779.054c3.22,0,5.579,1.487,6.551,5.231L9.8,5.836c-.055-1.9-1.249-2.478-2.942-2.478-1.332,0-2.3.578-2.3,1.487,0,.716.5,1.459,2,1.735l2.692.5c2.637.5,4.052,2.2,4.052,4.544,0,3.442-3.136,5.149-6.078,5.149-3.108,0-6.55-1.6-7.1-5.48l3.525-.551c.194,2.01,1.444,2.726,3.442,2.726,1.526,0,2.553-.551,2.553-1.514,0-.854-.472-1.487-2.137-1.79l-2.442-.44A4.655,4.655,0,0,1,.9,5.12C.9,1.541,4.171.054,6.779.054" transform="translate(-0.119 -0.054)" fill="#ff5b24" fill-rule="evenodd" />
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        <?php
                                        } ?>
                                    </div>
									
                                    <?php
                                    if ($payment_option_type == 'strex') {
										?>
                                        <h1>Gebyr på mobilfaktura</h1>
                                        <?php 
										if ($payment_job_type == 'inspection') {

                                            echo '<p>Befaringsgebyret vil komme på din neste mobilfaktura</p>';
											
                                        } else {

                                            echo '<p>Gebyr belastes kun om du får jobben, eller avtaler befaring. <br> 
											(Du finner oversikt i menyen “betalinger” )</p>';
                                        }
                                    } else { 
										?>
                                        <h1>Reservasjonen var vellykket</h1>
                                        <p>Reservert beløp belastes kun om du får jobben, eller avtaler befaring. <br>
										(Du finner full oversikt i menyen “betalinger” )
										</p>
                                    <?php
                                    } 
									?>
                                </div>
                            </div>
                            <?php
                            $style = '';
                            if ($chat_user_data['profile_image']) {
                                $style = base_url('/assets/uploads/') . '' . $chat_user_data['profile_image'];
                            } else {
                                $style = '/assets/frontend/images/no-profile-pic.jpg';
                            }
                            ?>
                            <div class="info quick-message-contact">
                                <img src="<?php echo $style; ?>" alt="">
                                <h3>Skriv en melding til <a href="javascript:;"><?php echo $chat_user_data['first_name']; ?>.</a></h3>
                                <div class="forminput-message">
                                    <form action="javascript:;" autocomplete="on" class="credit-card" id="payment-info2">
                                        <div class="form-row selected-listing flex-nowrap 22" data-user_id="<?php echo $chat_user_data['user_id']; ?>" data-job_id="<?php echo $job_info['job_id']; ?>" data-helper="N">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="payment_message" name="payment_message" placeholder="Skriv din melding her…">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <button class="btn btn-secondary enter-reserverd-pay-msg" value="Send">Send</button>
                                            </div>
                                        </div>
                                        <div id="success_payment_msg"></div>
                                    </form>
                                </div>
								
							 
                                <p><br>
                                    <?php
                                    if ($payment_option_type == 'strex') {

                                        if ($payment_job_type == 'inspection') { ?>
                                            Du har betalt befaringsgebyret og kan fritt utveksle
                                            kontaktinformasjon og gå på befaring.

                                        <?php
                                        } else { ?>

                                            Husk at kontaktinformasjon direkte i chatten er forbudt. Hold deg
oppdatert på våre chatt regler øverst i chatten.

                                        <?php
                                        }
                                    } else {                                        
                                        if ($payment_job_type == 'inspection') { ?>
                                            Du har betalt befaringsgebyret og kan fritt utveksle
                                            kontaktinformasjon og gå på befaring.
                                        <?php
                                        } else { ?>
                                            Husk at kontaktinformasjon direkte i chatten er forbudt. Hold deg
oppdatert på våre chatt regler øverst i chatten.
                                    <?php
                                        }
                                    }
                                    ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        } 
		?>
		
        <?php if ($success_payment == "no") { ?>
            <div class="modal-dialog" style="min-width: auto; max-width: 550px; ">
                <div class="modal-content">
                    <div class="modal-header">
                        <a class="navbar-brand" href="javascript:;">
                            <img src="/assets/frontend/images/logo.svg" alt="MinSmåjobb" style="width: 223.19px;height: 38.56px;" />
                        </a>
                        <button type="button" class="close" aria-label="Close" data-dismiss="modal">
                            <svg xmlns="http://www.w3.org/2000/svg" width="39.456" height="39.456" viewBox="0 0 39.456 39.456">
                                <g id="Grupo_88" data-name="Grupo 88" transform="translate(19.728) rotate(45)">
                                    <path id="Trazado_87" data-name="Trazado 87" d="M16.206,9.231H12.719V5.744a1.744,1.744,0,0,0-3.487,0V9.231H5.744a1.744,1.744,0,0,0,0,3.487H9.231v3.487a1.744,1.744,0,0,0,3.487,0V12.719h3.487a1.744,1.744,0,0,0,0-3.487Z" transform="translate(2.975 2.975)" fill="rgba(255,255,255,0.44)" />
                                    <path id="Trazado_88" data-name="Trazado 88" d="M13.95,0A13.95,13.95,0,1,0,27.9,13.95,13.95,13.95,0,0,0,13.95,0Zm0,24.412A10.462,10.462,0,1,1,24.412,13.95,10.462,10.462,0,0,1,13.95,24.412Z" fill="rgba(255,255,255,0.44)" />
                                </g>
                            </svg>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-content">
                            <div class="success-message">
                                <div class="white-box">
                                    <div class="sucessiconvipps"><i class="far fa-times-circle"></i></div>
                                    <h1>...Ooops!</h1>
                                    <p>Her gikk noe galt</p>
                                    <p>Vi klarte ikke å reservere gebyret på <strong>kr. <?php echo $amount_charge; ?>.-</strong> Godkjente du reservasjonen fra Vipps appen?</p>
                                    <p>Husk at vi kun belaster kontoen din dersom du får småjobben.</p>
                                    <br>
                                    <a href="javascript:;" class="btn btn-primary btn-payment-again">Prøv igjen</a><br><br>
                                    <a href="javascript:;" class="btn-close-payment">Avbryt</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        } 
		?>
    </div>
	<?php
*/	
	
	
    $this->session->unset_userdata('success_payment');
    $this->session->unset_userdata('payment_option_type');
}
?>
<!---------------- after payment ---------->



<!-------------------------------------->

<!-- body code goes here -->
<div class="modal fade" id="chat_popup_info_helper">
<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<a class="navbar-brand" href="#">
				<img src="/assets/frontend/images/logo.svg" alt="MinSmåjobb" style="width: 223.19px;height: 38.56px;" />
			</a>
			<button type="button" class="close" aria-label="Close" data-dismiss="modal">
				<svg xmlns="http://www.w3.org/2000/svg" width="39.456" height="39.456" viewBox="0 0 39.456 39.456">  <g id="Grupo_88" data-name="Grupo 88" transform="translate(19.728) rotate(45)">    <path id="Trazado_87" data-name="Trazado 87" d="M16.206,9.231H12.719V5.744a1.744,1.744,0,0,0-3.487,0V9.231H5.744a1.744,1.744,0,0,0,0,3.487H9.231v3.487a1.744,1.744,0,0,0,3.487,0V12.719h3.487a1.744,1.744,0,0,0,0-3.487Z" transform="translate(2.975 2.975)" fill="rgba(255,255,255,0.44)"/>    <path id="Trazado_88" data-name="Trazado 88" d="M13.95,0A13.95,13.95,0,1,0,27.9,13.95,13.95,13.95,0,0,0,13.95,0Zm0,24.412A10.462,10.462,0,1,1,24.412,13.95,10.462,10.462,0,0,1,13.95,24.412Z" fill="rgba(255,255,255,0.44)"/>  </g></svg>
			</button>
		</div>
		<div class="modal-body">
			<div class="container-fluid white-box form-content">
			
					 
				 <!--------------- content -------------------->
				 
				 <div class="container">
					<div class="article">
						<h1 id="chat_popup_info_heading">Deler du kontaktinformasjon?</h1><br>
						
						<span id="chat_popup_info_message">Kommunikasjon utenfor vårt nettsted har et
					befaringsgebyr pålydende kr. <span>#Inspection fee#.</span>
					Pass på å ha en konkret avtale om befaring før
					du deler kontaktinformasjon. Om befaring ikke
					er nødvendig, be oppdragsgiver velge deg som
					hjelper og kontaktinformasjon vil bli automatisk
					formidlet. Dersom meldingen ikke inneholder
					informasjon som kan brukes til å kontakte deg
					direkte vil du ikke bli belastet befaringsgebyr.</span> <br>
					
						
						 
						
						<div class="text-center">
						<button type="button" class="btn btn-danger mr-auto" id="btn-Stopp-melding" >Stopp melding</button>
						<button type="button" class="btn btn-primary mr-auto" id="btn-Send-melding">Send melding</button>
						</div>
						
					</div>
				</div>
				 
				 <!-------------- content --------------------->
				 
				 
			</div>
		</div>
	</div>
</div>
</div> 

<!-------------------------------------->


<div class="modal fade" id="chat_popup_info_emp">
<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<a class="navbar-brand" href="#">
				<img src="/assets/frontend/images/logo.svg" alt="MinSmåjobb" style="width: 223.19px;height: 38.56px;" />
			</a>
			<button type="button" class="close btn-Avbryt" aria-label="Close" data-dismiss="modal">
				<svg xmlns="http://www.w3.org/2000/svg" width="39.456" height="39.456" viewBox="0 0 39.456 39.456">  <g id="Grupo_88" data-name="Grupo 88" transform="translate(19.728) rotate(45)">    <path id="Trazado_87" data-name="Trazado 87" d="M16.206,9.231H12.719V5.744a1.744,1.744,0,0,0-3.487,0V9.231H5.744a1.744,1.744,0,0,0,0,3.487H9.231v3.487a1.744,1.744,0,0,0,3.487,0V12.719h3.487a1.744,1.744,0,0,0,0-3.487Z" transform="translate(2.975 2.975)" fill="rgba(255,255,255,0.44)"/>    <path id="Trazado_88" data-name="Trazado 88" d="M13.95,0A13.95,13.95,0,1,0,27.9,13.95,13.95,13.95,0,0,0,13.95,0Zm0,24.412A10.462,10.462,0,1,1,24.412,13.95,10.462,10.462,0,0,1,13.95,24.412Z" fill="rgba(255,255,255,0.44)"/>  </g></svg>
			</button>
		</div>
		<div class="modal-body">
			<div class="container-fluid form-content"> 
				 <!--------------- content --------------------> 
				 <div class="container">
					<div class="article">
						<h1>Deler du kontaktinformasjon?</h1><br>
						
						 <span>
							Direkte kommunikasjon med hjelper er kun
tillatt etter at du har valgt hjelperen for oppdraget
eller når du ønsker hjelperen på befaring. - Ved
befaring skal alltid tidspunkt avklares med hjelper i
chatten <b>før</b> du deler kontaktinformasjon. Takk for at
du bidrar til en hyggelig møteplass for alle.
							</span> <br>
						
						 
						<div class="text-center">
						<button type="button" class="btn btn-danger mr-auto" id="btn-Avbryt" >Stopp melding</button>
						<button type="button" class="btn btn-primary mr-auto" id="btn-Send-melding_emp">Send melding</button>
						</div>
						
					</div>
				</div>
				 
				 <!-------------- content --------------------->
				 
				 
			</div>
		</div>
	</div>
</div>
</div> 

<!-------------------------------------->




        <div class="modal fade" id="div-deny-request">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" aria-label="Close" data-dismiss="modal"><i class="fas fa-times-circle"></i></button>
                    </div>  
                    <div class="modal-body">
                        <div class="white-box information-popup">
                            <span class="icon"><i class="fas fa-ban" style="font-weight: bolder; color:#FA3776 !important"></i></span>
                            <h2>Avvis tilbud</h2>
                            <p>Er du sikker på at du vil avvise
tilbudet? Hjelperen vil bli fjernet
fra kontaktlisten din </p>
                            <div class="btns">
                                <a href="#" class="btn btn-primary" id="btn-reject-offer-cansle" >Avbryt</a>

                                <a href="#" class="btn btn-danger" id="btn-reject-offer-reject"><i class="fas fa-ban"  style="font-weight: bolder;opacity: 1;color:#FA3776 !important"></i> Avviss</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  

<!-------------------------------------->



<div class="modal fade" id="div-cancel-request">
	<div class="modal-dialog modal-lg">
		<div class="modal-content"> 
			
			<div class="modal-body">
				<div class="white-box information-popup information-popup-hide">
					<div class="wrapme" style="max-width: 500px; margin: auto">
					
					
					<img src="/assets/frontend/images/cancel-notpossible.svg" alt="" style="width:51.83px;height: 47.95px; display:block; margin: auto;">
					
					<br>
					<h2>Er du sikker på at du vil trekke
tilbake tilbudet?</h2>
					
					<br>
					
					<p>Du kan ikke sende nytt tilbud og vi anbefaler at du informerer om
prisendinger i chatten i stedet for å trekke tilbake tilbudet. 
</p>
					
					<br>
					
					<div class="text-center">
					
					<a href="javascript:;" class="btn btn-primary btn-dont-cancel-counter mb-2 " style="">Avbryt</a> 
					
					<a href="javascript:;" class="btn btn-primary  btn-cancel-confirm-counter mb-2 " style="">Trekk tilbake</a></div>
					
					
						 
					</div>					
				</div>
		 
				
			</div>
		</div>
	</div>

</div> 

<!-------------------------------------->


<div class="modal fade" id="div-accept-request-confirm">
<div class="modal-dialog">
	<div class="modal-content">
		 
		<div class="modal-body">
			<div class="container-fluid  white-box  form-content"> 
				 <!--------------- content --------------------> 
				 <div class="container">
					<div class="article">
						<h1 class="text-center">Ny kontakt</h1><br>
						<p>Hjelperen er lagt til i kontaktlisten
din og dere kan diskutere småjobben. 
Husk at du må velge
hjelperen om dere blir enig.</p>
						<div class="text-center">
						
							<button type="button" class="btn btn-primary mr-auto" id="btn-accept-request-confirm">OK</button>
							
						</div>						
					</div>
				</div>
				 
				 <!-------------- content --------------------->
				 
				 
			</div>
		</div>
	</div>
</div>
</div> 

<!-------------------------------------->

<!------------------- bannotpossible ------------------->
<!--
<div class="modal fade paddmeoff" id="bannotpossible">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				<div class="white-box information-popup" id="bannotpossible-content">
					 
				</div>
			</div>
		</div>
	</div>
</div>
-->
<!------------------- bannotpossible ------------------->



<?php /*
<div class="modal fade job-h1-data " id="map-job">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" aria-label="Close" data-dismiss="modal">
					<svg xmlns="http://www.w3.org/2000/svg" width="39.456" height="39.456" viewBox="0 0 39.456 39.456">  <g id="Grupo_88" data-name="Grupo 88" transform="translate(19.728) rotate(45)">    <path id="Trazado_87" data-name="Trazado 87" d="M16.206,9.231H12.719V5.744a1.744,1.744,0,0,0-3.487,0V9.231H5.744a1.744,1.744,0,0,0,0,3.487H9.231v3.487a1.744,1.744,0,0,0,3.487,0V12.719h3.487a1.744,1.744,0,0,0,0-3.487Z" transform="translate(2.975 2.975)" fill="rgba(255,255,255,0.44)"/>    <path id="Trazado_88" data-name="Trazado 88" d="M13.95,0A13.95,13.95,0,1,0,27.9,13.95,13.95,13.95,0,0,0,13.95,0Zm0,24.412A10.462,10.462,0,1,1,24.412,13.95,10.462,10.462,0,0,1,13.95,24.412Z" fill="rgba(255,255,255,0.44)"/>  </g></svg>
				</button>
			</div>
			<div class="modal-body" id="map-modal-body">
			
				
			</div>
		</div>
	</div>
</div>
*/ ?>
<!----------------------------------->




<!-- body code goes here -->
<div class="modal fade job-h1-data " id="div-service-deny-request">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" aria-label="Close" data-dismiss="modal">
					<svg xmlns="http://www.w3.org/2000/svg" width="39.456" height="39.456" viewBox="0 0 39.456 39.456">  <g id="Grupo_88" data-name="Grupo 88" transform="translate(19.728) rotate(45)">    <path id="Trazado_87" data-name="Trazado 87" d="M16.206,9.231H12.719V5.744a1.744,1.744,0,0,0-3.487,0V9.231H5.744a1.744,1.744,0,0,0,0,3.487H9.231v3.487a1.744,1.744,0,0,0,3.487,0V12.719h3.487a1.744,1.744,0,0,0,0-3.487Z" transform="translate(2.975 2.975)" fill="rgba(255,255,255,0.44)"/>    <path id="Trazado_88" data-name="Trazado 88" d="M13.95,0A13.95,13.95,0,1,0,27.9,13.95,13.95,13.95,0,0,0,13.95,0Zm0,24.412A10.462,10.462,0,1,1,24.412,13.95,10.462,10.462,0,0,1,13.95,24.412Z" fill="rgba(255,255,255,0.44)"/>  </g></svg>
				</button>
			</div>
			<div class="modal-body">
				
				
				<div class="white-box information-popup"> 
				 <!--------------- content --------------------> 
				 <div class="container">
					<div class="article text-center">
						<h1  class="text-center">Er du sikker?</h1><br>
						<p >Oppdragsgiveren vil bli fjernet fra 
kontaktlisten din.</p>
						<div class="text-center">
						<button type="button" class="btn btn-primary mr-auto" id="btn-service-avbryt" >Avbryt</button>
						<button type="button" class="btn btn-primary mr-auto" id="btn-service-invitasjon">Avvis invitasjon</button>
						</div>						
					</div>
				</div>
				 
				 <!-------------- content --------------------->
				 
				 
			</div>
			
			
				
			</div>
		</div>
	</div>
</div>

<!----------------------------------->





 




<!----------------------------------->
 

<!----------------------------------->



<!------------------------------------->
 

<!------------------------------------->




<!----------------------------------->
<!--------stex_phone_confirm--------->
<!----------------------------------->
<?php /* 
<div class="modal fade" id="stex_phone_confirm">
<div class="modal-dialog modal-lg">
	<div class="modal-content">
		<div class="modal-header">
			<a class="navbar-brand" href="javascript:;">
				<img src="/assets/frontend/images/logo.svg" alt="MinSmåjobb" style="width: 223.19px;height: 38.56px;" />
			</a>
			<button type="button" class="close" aria-label="Close" data-dismiss="modal">
				<svg xmlns="http://www.w3.org/2000/svg" width="39.456" height="39.456" viewBox="0 0 39.456 39.456">  <g id="Grupo_88" data-name="Grupo 88" transform="translate(19.728) rotate(45)">    <path id="Trazado_87" data-name="Trazado 87" d="M16.206,9.231H12.719V5.744a1.744,1.744,0,0,0-3.487,0V9.231H5.744a1.744,1.744,0,0,0,0,3.487H9.231v3.487a1.744,1.744,0,0,0,3.487,0V12.719h3.487a1.744,1.744,0,0,0,0-3.487Z" transform="translate(2.975 2.975)" fill="rgba(255,255,255,0.44)"/>    <path id="Trazado_88" data-name="Trazado 88" d="M13.95,0A13.95,13.95,0,1,0,27.9,13.95,13.95,13.95,0,0,0,13.95,0Zm0,24.412A10.462,10.462,0,1,1,24.412,13.95,10.462,10.462,0,0,1,13.95,24.412Z" fill="rgba(255,255,255,0.44)"/>  </g></svg>
			</button>
		</div>
		<div class="modal-body">
			<div class="container-fluid form-content">
				<div class="row">
					<div class="col-md-5 order-md-1 info">
						<h3>Strex oppsett</h3>
						<hr>
						<div class="ad-sample">
							<h4> </h4>
							<ul class="list-unstyled alerts">
								 


								
							</ul>
						</div>
					</div>
					<div class="col-md-7 order-md-2 form">
						<h1><svg xmlns="http://www.w3.org/2000/svg" width="38.138" height="29.226" viewBox="0 0 38.138 29.226">  <g id="Grupo_188" data-name="Grupo 188" transform="translate(-10.2 -18)">    <path id="Trazado_168" data-name="Trazado 168" d="M24.305,18h6.467c1.866,0,3.776.043,5.642.087.955.043,1.91.087,2.864.174a4.859,4.859,0,0,1,2.864,1.085,5.009,5.009,0,0,1,1.779,3.342c.043.3.043.564.087.868.13,1.128.13,2.3.174,3.472.043,2.474.043,4.9,0,7.378a7.692,7.692,0,0,0-2-.651c0-1.476.043-2.995,0-4.47H12.24c0,2.257,0,4.557.043,6.814.043.825.043,1.693.13,2.517a3.285,3.285,0,0,0,.043.651,3.24,3.24,0,0,0,1.649,2.3,2.181,2.181,0,0,0,1.042.26c.174,0,.347.043.521.043.694.043,1.389.087,2.127.13q5.013.13,10.025.13c2.43,0,4.817,0,7.248-.087a5.861,5.861,0,0,0,1.042,2c-2.127.043-4.253.087-6.38.087-3.125,0-6.293,0-9.418-.043-1.476-.043-2.951-.043-4.427-.174-.347,0-.651-.087-1-.087a4.868,4.868,0,0,1-3.038-1.432,5.185,5.185,0,0,1-1.432-3.342,7.1,7.1,0,0,0-.087-.955c-.087-1.649-.13-3.3-.13-4.9V29.414a1.75,1.75,0,0,0,0-.477c0-.911,0-1.779.043-2.691.043-1,.043-1.953.174-2.951a5.26,5.26,0,0,1,1.866-3.906A4.592,4.592,0,0,1,15.148,18.3c1.085-.087,2.213-.13,3.3-.174,1.823-.043,3.646-.087,5.512-.087A.955.955,0,0,1,24.305,18m-6.467,2.127c-.825.043-1.649.043-2.474.13a2.8,2.8,0,0,0-.868.13,2.96,2.96,0,0,0-1.562,1.345,3.236,3.236,0,0,0-.434,1.649c-.043.434-.087.868-.087,1.3H42.142a6.475,6.475,0,0,0-.087-.911c0-.174-.043-.3-.043-.477a3.187,3.187,0,0,0-1.042-2.344,2.578,2.578,0,0,0-1.649-.694c-.174,0-.347-.043-.521-.043-.651-.043-1.3-.087-1.953-.087-1.693-.043-3.342-.087-5.034-.087-1.866,0-3.732-.043-5.642,0C23.35,20.04,20.573,20.04,17.838,20.127Z" fill="#465b61"/>    <path id="Trazado_169" data-name="Trazado 169" d="M24.659,55.249a7,7,0,0,1,2.127.087,1.179,1.179,0,0,1,.911.521,1.516,1.516,0,0,1,.217.564,3.226,3.226,0,0,1,.13,1.128,7.011,7.011,0,0,1-.087,1.345l-.13.521a1.015,1.015,0,0,1-.694.694c-.174.043-.3.043-.477.087a2.867,2.867,0,0,1-1.042.13,6.57,6.57,0,0,1-1.3-.087c-.217-.087-.434-.043-.608-.13a1.1,1.1,0,0,1-.651-1,7.707,7.707,0,0,1-.087-2,6.429,6.429,0,0,1,.13-.825,1.08,1.08,0,0,1,.738-.868c.13-.043.3-.043.477-.087A.468.468,0,0,1,24.659,55.249Z" transform="translate(-7.211 -21.061)" fill="#465b61"/>    <path id="Trazado_170" data-name="Trazado 170" d="M76.985,57.881a7.375,7.375,0,0,1,3.857.7,6.851,6.851,0,0,1,3.1,3.035,7.113,7.113,0,0,1-6.828,10.369A7.111,7.111,0,0,1,73,70.21a6.789,6.789,0,0,1-1.96-2.845,6.993,6.993,0,0,1,2.4-8.093,6.659,6.659,0,0,1,3.541-1.391m0,3.1v3.1H74.076v1.707h2.908v3.351h1.834V65.785h2.908V64.077H78.818v-3.1Z" transform="translate(-36.402 -24.773)" fill="#465b61"/>  </g></svg> Avtale om faktura</h1>
						<form action="javascript:;" autocomplete="on" style="margin-top: 30px" class="credit-card" id="offer-info">  
						
							<input type="hidden" name="job_id" id="job_id" value="<?php echo $job_info['job_id']; ?>" >
							
							<div class="form-group">
								<label for="message_from_helper">
								
								Inngå en Strexavtale for bedre oversikt og enklere bruk
av nettsidene. Ved avtaleinngåelse bekrefter du 
at vi kan belaste påløpte gebyrer på din mobilfaktura. <br><br>

Bekreft avtale ved å taste inn 4-sifret kode sendt på SMS:
								
								</label>
								<input type="text" id="confirm_number" name="confirm_number" class="form-control " >
								
								<input type="hidden" id="transactionId" name="transactionId"   >
								
								
								
							</div> 
							
					 
							
							<div id="confirm_number_msg"></div>
							
							<button type="button" class="btn btn-primary mr-auto "  id="continue_confirm_number">Neste ></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div> 

*/ ?>

<!----------------------------------->
<!--------stex_phone_confirm--------->
<!----------------------------------->



<!----------------------------------->
<!------offerhelp_stex_confirm------->
<!----------------------------------->
<?php /*
<div class="modal fade" id="offerhelp_stex_confirm">
<div class="modal-dialog modal-lg">
	<div class="modal-content">
		<div class="modal-header">
			<a class="navbar-brand" href="javascript:;">
				<img src="/assets/frontend/images/logo.svg" alt="MinSmåjobb" style="width: 223.19px;height: 38.56px;" />
			</a>
			<button type="button" class="close" aria-label="Close" data-dismiss="modal">
				<svg xmlns="http://www.w3.org/2000/svg" width="39.456" height="39.456" viewBox="0 0 39.456 39.456">  <g id="Grupo_88" data-name="Grupo 88" transform="translate(19.728) rotate(45)">    <path id="Trazado_87" data-name="Trazado 87" d="M16.206,9.231H12.719V5.744a1.744,1.744,0,0,0-3.487,0V9.231H5.744a1.744,1.744,0,0,0,0,3.487H9.231v3.487a1.744,1.744,0,0,0,3.487,0V12.719h3.487a1.744,1.744,0,0,0,0-3.487Z" transform="translate(2.975 2.975)" fill="rgba(255,255,255,0.44)"/>    <path id="Trazado_88" data-name="Trazado 88" d="M13.95,0A13.95,13.95,0,1,0,27.9,13.95,13.95,13.95,0,0,0,13.95,0Zm0,24.412A10.462,10.462,0,1,1,24.412,13.95,10.462,10.462,0,0,1,13.95,24.412Z" fill="rgba(255,255,255,0.44)"/>  </g></svg>
			</button>
		</div>
		<div class="modal-body">
			<div class="container-fluid form-content">
				<div class="row">
					
					<!--
					<div class="col-md-5 order-md-1 info">
						<h3>You are all set up</h3>
						<hr>
						<div class="ad-sample">
							<h4> </h4>
							<ul class="list-unstyled alerts">
								 


								
							</ul>
						</div>
					</div>
					
					-->
					
					<div class="col-md-12 order-md-2 form">
						<h1><svg xmlns="http://www.w3.org/2000/svg" width="38.138" height="29.226" viewBox="0 0 38.138 29.226">  <g id="Grupo_188" data-name="Grupo 188" transform="translate(-10.2 -18)">    <path id="Trazado_168" data-name="Trazado 168" d="M24.305,18h6.467c1.866,0,3.776.043,5.642.087.955.043,1.91.087,2.864.174a4.859,4.859,0,0,1,2.864,1.085,5.009,5.009,0,0,1,1.779,3.342c.043.3.043.564.087.868.13,1.128.13,2.3.174,3.472.043,2.474.043,4.9,0,7.378a7.692,7.692,0,0,0-2-.651c0-1.476.043-2.995,0-4.47H12.24c0,2.257,0,4.557.043,6.814.043.825.043,1.693.13,2.517a3.285,3.285,0,0,0,.043.651,3.24,3.24,0,0,0,1.649,2.3,2.181,2.181,0,0,0,1.042.26c.174,0,.347.043.521.043.694.043,1.389.087,2.127.13q5.013.13,10.025.13c2.43,0,4.817,0,7.248-.087a5.861,5.861,0,0,0,1.042,2c-2.127.043-4.253.087-6.38.087-3.125,0-6.293,0-9.418-.043-1.476-.043-2.951-.043-4.427-.174-.347,0-.651-.087-1-.087a4.868,4.868,0,0,1-3.038-1.432,5.185,5.185,0,0,1-1.432-3.342,7.1,7.1,0,0,0-.087-.955c-.087-1.649-.13-3.3-.13-4.9V29.414a1.75,1.75,0,0,0,0-.477c0-.911,0-1.779.043-2.691.043-1,.043-1.953.174-2.951a5.26,5.26,0,0,1,1.866-3.906A4.592,4.592,0,0,1,15.148,18.3c1.085-.087,2.213-.13,3.3-.174,1.823-.043,3.646-.087,5.512-.087A.955.955,0,0,1,24.305,18m-6.467,2.127c-.825.043-1.649.043-2.474.13a2.8,2.8,0,0,0-.868.13,2.96,2.96,0,0,0-1.562,1.345,3.236,3.236,0,0,0-.434,1.649c-.043.434-.087.868-.087,1.3H42.142a6.475,6.475,0,0,0-.087-.911c0-.174-.043-.3-.043-.477a3.187,3.187,0,0,0-1.042-2.344,2.578,2.578,0,0,0-1.649-.694c-.174,0-.347-.043-.521-.043-.651-.043-1.3-.087-1.953-.087-1.693-.043-3.342-.087-5.034-.087-1.866,0-3.732-.043-5.642,0C23.35,20.04,20.573,20.04,17.838,20.127Z" fill="#465b61"/>    <path id="Trazado_169" data-name="Trazado 169" d="M24.659,55.249a7,7,0,0,1,2.127.087,1.179,1.179,0,0,1,.911.521,1.516,1.516,0,0,1,.217.564,3.226,3.226,0,0,1,.13,1.128,7.011,7.011,0,0,1-.087,1.345l-.13.521a1.015,1.015,0,0,1-.694.694c-.174.043-.3.043-.477.087a2.867,2.867,0,0,1-1.042.13,6.57,6.57,0,0,1-1.3-.087c-.217-.087-.434-.043-.608-.13a1.1,1.1,0,0,1-.651-1,7.707,7.707,0,0,1-.087-2,6.429,6.429,0,0,1,.13-.825,1.08,1.08,0,0,1,.738-.868c.13-.043.3-.043.477-.087A.468.468,0,0,1,24.659,55.249Z" transform="translate(-7.211 -21.061)" fill="#465b61"/>    <path id="Trazado_170" data-name="Trazado 170" d="M76.985,57.881a7.375,7.375,0,0,1,3.857.7,6.851,6.851,0,0,1,3.1,3.035,7.113,7.113,0,0,1-6.828,10.369A7.111,7.111,0,0,1,73,70.21a6.789,6.789,0,0,1-1.96-2.845,6.993,6.993,0,0,1,2.4-8.093,6.659,6.659,0,0,1,3.541-1.391m0,3.1v3.1H74.076v1.707h2.908v3.351h1.834V65.785h2.908V64.077H78.818v-3.1Z" transform="translate(-36.402 -24.773)" fill="#465b61"/>  </g></svg> Bekreftelse på avtale</h1>
						<form action="javascript:;" autocomplete="on" style="margin-top: 30px" class="credit-card" id="offer-info">  
						
							<input type="hidden" name="job_id" id="job_id" value="<?php echo $job_info['job_id']; ?>" >
							
							<input type="hidden" name="user_id" id="user_id" value="" >
							
							
							
							
							<div class="form-group">
								<label for="message_from_helper">
								
								Avtalen er godkjent og du vil for fremtiden få gebyrer på din mobilfaktura
dersom du velger Strex når du tilbyr hjelp til småjobber. Du kan også
bruke Vipps som tidligere dersom det skulle være ønskelig.
								
								</label>
								
								
								
								
								
							</div> 
							
					 
							
							<div id="confirm_number_msg"></div>
							
							<button type="button" class="btn btn-primary mr-auto "  id="offerhelp_stex_confirm_next">Neste ></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div> 
*/ ?>
<!----------------------------------->
<!------offerhelp_stex_confirm------->
<!----------------------------------->



<!----------------------------------->
<!------------stex_popupstrex-------->
<!----------------------------------->
<div class="modal fade" id="stex_popupstrex">


<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-body">
			<div class="white-box information-popup">
		 
				
				<div class="publish-job-text">
				<h2>Strex er ikke tilgjengelig</h2>
				<p>
				Strex er deaktivert på kontoen din. <br>
Ta kontakt med kundeservice om du <br>
ønsker å bruke Strex.
				</p>  
				</div> 
				
				<div class="text-center">
					<a href="javascript:;" class="btn btn-success btn-close-block">Ok</a>
				</div>
			</div>
		</div>
	</div>
</div>

</div> 
<!----------------------------------->
<!------------stex_popupstrex-------->
<!----------------------------------->
 
<!---------------------------------------------------------------------->
<!--------------------------------- new -------------------------------->
<!---------------------------------------------------------------------->

<!-------------fund option----------->
<div class="modal sendofferModal fade" id="payment-option-modal">
</div>
<!-------------fund option----------->
<script>
$(document).ready(function(){
	$(".alert-warning").css("display","none");
})
</script>