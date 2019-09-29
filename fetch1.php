<?php
include 'header.php';
session_start();
 ?>
  			<table >
  				<thead>
  					<tr>
  						<th>Description</th>
              <th>image</th>
  						<th>Operations</th>
  					</tr>
  				</thead>
  				<tbody>
        <?php
    if(isset($_POST['submit'])){
    }
         ?>
  				<?php
  					$sql = "SELECT * FROM feed";
  					$res = mysql_query( $sql);
  					while ($r = mysql_fetch_assoc($res)) {
  				?>
          <?php $img= $r['thumb']; ?>
  						<td><?php echo $r['description']; ?></td>
              <td><?php echo "<img src='".$img."'>" ; ?></td>
  						<td><a href="update.php?id=<?php echo $r['id']; ?>"></a> 
                <a href="deletepost.php?id=<?php echo $r['id']; ?>">Delete</a></td>
  					</tr>
  				<?php } ?>
  				</tbody>
  			</table>
  		</div>
  	</div>
  </section>
