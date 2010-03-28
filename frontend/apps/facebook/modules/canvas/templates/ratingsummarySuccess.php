<p>You are rating: <?php echo $friendName;?>.</p>

<fb:profile-pic uid="<?php echo $friendID; ?>"></fb:profile-pic>

<?php include_partial("flashes"); ?>

<p>Below is a summary of all the ratings you have provided.  If you're happy with these, please click "Finish", or you can edit them</p>

<?php foreach ($skills as $skill): ?>
  <div>
    <strong><?php echo $skill->name;?></strong><br />
    Your rating: <?php echo $ratings[$skill->id]; ?>
  </div>
<?php endforeach; ?>

<button>Finish</button>
or <a href="<?php echo url_for("@canvas_dorate", true); ?>">Edit</a>