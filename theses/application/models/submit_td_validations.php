<?php
	/**
	 *  No Args
	 */
?>

	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script src="<?=base_url()?>assets/bootstrap/js/bootstrap.js"></script>
	<script src="<?=base_url()?>assets/bootstrap/js/bootstrap-transition.js"></script>
	<script src="<?=base_url()?>assets/bootstrap/js/bootstrap-alert.js"></script>
	<script src="<?=base_url()?>assets/bootstrap/js/bootstrap-modal.js"></script>
	<script src="<?=base_url()?>assets/bootstrap/js/bootstrap-dropdown.js"></script>
	<script src="<?=base_url()?>assets/bootstrap/js/bootstrap-scrollspy.js"></script>
	<script src="<?=base_url()?>assets/bootstrap/js/bootstrap-tab.js"></script>
	<script src="<?=base_url()?>assets/bootstrap/js/bootstrap-tooltip.js"></script>
	<script src="<?=base_url()?>assets/bootstrap/js/bootstrap-popover.js"></script>
	<script src="<?=base_url()?>assets/bootstrap/js/bootstrap-button.js"></script>
	<script src="<?=base_url()?>assets/bootstrap/js/bootstrap-collapse.js"></script>
	<script src="<?=base_url()?>assets/bootstrap/js/bootstrap-carousel.js"></script>
	<script src="<?=base_url()?>assets/bootstrap/js/bootstrap-typeahead.js"></script>

<script type="text/javascript" charset="utf-8">
	$().ready(function(){

//		$('input, select', '#content').click(function() {
//			$(this).css('border', '1px #CCC solid');
//		});

//		$('#last_name, #first_name, #advisor_last_name, #advisor_first_name').blur(function() {
//			var $this = $(this);
//			var val = $this.val();
//			var auth_reg = /^[A-Z][a-z]/;
//
//			if(!auth_reg.test(val)){
//				$this.css('border', '1px red solid');	
//			} 
//                        if(auth_reg.test(val)) {
//				$this.css('border', '1px #CCC solid');
//			}
//		});

		$('#degree_date').blur(function() {
			var $this = $(this);
			var val = $this.val();
			var date_reg = /^[0-9]{4}$/;
			var year = new Date().getFullYear();

                            
			if(!date_reg.test(val)){
                            $this.css('border', '2px red solid');
                            document.getElementById('degree_date_error_msg').innerHTML='Enter date in a four digit format';
			}
                        if(date_reg.test(val)){
                            if(val >= (year+1)){
                                document.getElementById('degree_date_error_msg').innerHTML='Are your sure about this date?<br />  It\'s more than one year into the future!';
                            }
                            if(val <= 1920){
                                document.getElementById('degree_date_error_msg').innerHTML='Are your sure about this date?<br />  It\'s before 1920.';
                            }
                            if(val <= (year+1) && val >= 1920){
                                $this.css('border', 'none');
                                document.getElementById('degree_date_error_msg').innerHTML='';
                        }
                     }    
                });

//		$('#department').blur(function() {
//			var $this = $(this);
//			if($(this).val().length > 3){
//				$this.css('border', '2px red solid');	
//			} else {
//				$this.css('border', '1px #CCC solid');
//			}
//		});

//		$('#keywords').blur(function(){
//			var $this = $(this);
//			if($this.val().split(',').length > 3){
//				$this.css('border', '2px red solid');	
//			} else {
//				$this.css('border', '1px #CCC solid');
//			}
//		});

		$('#file').change(function() {
			var $this = $(this);
			var fileType = $this.val().split('.').pop();
			console.log(fileType);
			if(fileType !== 'pdf' && fileType !== 'pdfa'){
				$this.css('border', '2px red solid');	
			} else {
				$this.css('border', 'none');
			}
		});

//		$('#submit').click(function(event) {
//			var badFields = [];
//			$('select, input', '#content').each(function(ind, el) {
//				if(!$(this).val()){
//					badFields.push($(this).attr('id'));
//				}
//			});
//
//			if(!$('#copyright_release').attr('checked')){
//				badFields.push('copyright_release');
//			}
//
//			if(badFields.length >= 1){
//				event.preventDefault();
//				var infoText = '';
//				for (var ii = badFields.length - 1; ii >= 0; ii--) {
//					var id = '#' + badFields[ii];
//					$(id).css('border', '2px yellow solid');
//					infoText += $($(id).prev()).text().split('(')[0] + '<br>'; // Field's label, minus instructions
//					console.log('Incorrect field: ' + badFields[ii]);
//				}
//				$('#main_alert').html('<h3>Missing Fields:</h3><p>' + infoText + '</p>').css('display', 'block');
//				return false;
//			} else {
//				// ACTUAL SUBMIT
//			}
//		});


//		$('.btn-pressable').click(function() {
//			var id = $(this).attr('data-submission-id');
//			$('button[data-submission-id='+ id +']').removeClass('disabled');
//			
//			if ($(this).hasClass('btn-success')){
//				$(this).removeClass('btn-success');
//			} else {
//				$('button[data-submission-id='+ id +']').removeClass('btn-success');
//				$('button[data-submission-id='+ id +']').addClass('disabled');
//				$(this).removeClass('disabled').addClass('btn-success');
//			}
//
//			var activeIDs = [];
//			$('button.btn-success.btn-primary[data-submission-id]').each(function() {return activeIDs.push($(this).attr('data-submission-id'));})
//			var denyIDs = [];
//			$('button.btn-success.btn-warning[data-submission-id]').each(function() {return denyIDs.push($(this).attr('data-submission-id'));})
//
//			console.log(activeIDs, denyIDs);
//		});

//		$('#get_cdm_file').click(function() {
//			var activeIDs = [];
//			$('button.btn-success.btn-primary[data-submission-id]').each(function() {return activeIDs.push($(this).attr('data-submission-id'));})
//			if(!activeIDs.length){
//				alert('No projects selected');
//				return;
//			}
//			window.location = '<?=base_url()?>get_file?' + decodeURIComponent($.param({'approvals':activeIDs}));
//		});
	});
</script>
