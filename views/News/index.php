
 
<h1> INDEX PHP  </h1>     

<?php foreach($item as $mass):?>

<?=$mass['id']?><br>
<a href="/news/<?=$mass['id']?>" > <?=$mass['title']?><br></a>
<?=$mass['date']?><br>
<?=$mass['shot_content']?><br>



<?php endforeach ?>