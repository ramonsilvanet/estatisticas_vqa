<div class='row'>
	<ol class="breadcrumb">
	  <li><a href="<?=site_url('home')?>">Home</a></li>
	  <li>Question</li>
	  <li class="active"><?php echo $question->question_id?></li>  
	</ol>
</div>


<div class='row'>

<table class="table table-stripped">

    <tr>
        <td>Question ID</td>
        <td><?php echo $question->question_id?></td>
    </tr>

    <tr>
        <td>Statement</td>
        <td><?php echo $question->statement?></td>
    </tr>

    <tr>
        <td>Answer</td>
        <td><?php echo $question->answer?></td>
    </tr>

    <tr>
        <td>Model Answer</td>
        <td><?php echo $question->network_answer?></td>
    </tr>

    <tr>
        <td>Is Correct?</td>
        <td><?php echo $question->answer == $question->network_answer ? "YES" : "NO";?></td>
    </tr>

    <tr>
        <td>Answer Trust</td>
        <td><?php echo $question->trust?></td>
    </tr>

</table>

<hr />

<img src ="http://imagenet.ramonsilva.net/dataset/vqa/COCO_val2014_000000<?php echo $question->image_id?>.jpg" class="img-responsive" />
<br />
<img src ="http://reports.ramonsilva.net/img/question_3381.png" class="img-responsive" />

</div>