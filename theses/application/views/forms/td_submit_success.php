<?php
$full_name = $first_name.' '.$last_name;
$lc_doc = strtolower($document_type);
?>
<br />
<h2><strong>Successful Submission!</strong></h2>
<h3><?=$full_name?>,</h3>

<p>Congratulations on receiving your <?=$degree_granted;?> and thank you for contributing your <?=$lc_doc;?> to Tulane University's Theses &amp; Dissertation Archive. <a href="<?=$userfile?>" target="_blank"> 
You may review your <strong> <?=$lc_doc; ?> submission here</strong>.</a></p>

<p>Contact <strong>Jeff Rubin</strong> should you need any assistance.</p>
    <p style="padding-left:30px;">
    E-mail: <a href="mailto:jrubin6@tulane.edu">jrubin6@tulane.edu</a><br />
    Phone: (504) 247-1832 [M-F: 9am-5pm]
</p>

<p>Thanks again for your contribution! Please allow two weeks for your submission to be available online at <a href="<?=base_url();?>"><?=base_url();?></a>.</p> 
    
<p>
    <strong>
        <a href="<?=base_url()?>user/logout">You may logout here</a></strong>.</p>


