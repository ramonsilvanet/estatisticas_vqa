<div class='row'>
	<ol class="breadcrumb">
	  <li><a href="<?=site_url('home')?>">Home</a></li>	  
	</ol>
</div>

<div class="row">
  <table class="table table-striped">
        <thead>
          <tr>
            <th>#</th>          
            <th>Question id</th>
            <th>Statement</th>
            <th>Answer</th>
            <th>Model Answer</th>
            <th>Is Correct ?</th>
            <th>Trust</th>
          </tr>
        </thead>
  <tbody> 
      <?php foreach($questions as $q): ?>
      <tr>
          <td><?php echo $q->id; ?></td>
          <td><?php echo $q->question_id; ?></td>
          <td><a href="<?php echo site_url("home/details/$q->id");?>"><?php echo $q->statement; ?></a></td>
          <td><?php echo $q->answer; ?></td>
          <td><?php echo $q->network_answer; ?></td>

          <td><?php echo $q->answer == $q->network_answer ? "YES" : "NO" ?></td>

          <td><?php echo $q->trust; ?></td>
      </tr>
      <?php endforeach; ?> 
  </tbody>
</table>

<?php echo $pagination_links; ?>
</div>