<table class="mainslider">

  <thead>
    <tr>
      <th>
Image
      </th>
      <th>
Title
      </th>
      <th>
Type
      </th>
    </tr>
  </thead>

  <tbody>
    <tr>
      <td>
  <img src="<?php echo thumb($page->file($values->image), array("height" => 150))->url(); ?>">
      </td>
      <td>
  <b><?php echo $values->title; ?></b>
      </td>
      <td>
  <?php echo $values->caption; ?>
      </td>
    </tr>
  </tbody>

</table>