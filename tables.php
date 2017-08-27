<?php require('layout.php'); ?>

<?php page_head(); ?>

<body onLoad="initialize()">

	<?php body_head(); ?>

	<?php //slider(); ?>	

	<div class="container" style="padding:0px 0px;">

	<div id="about">
	
		<div style="background:#da251d; color:#fff; overflow:auto;">
			<div style="float:left; margin:7px;">
				<span style="font-size:22px;">Tables</span>
			</div>
			<div style="float:right; margin:7px;">
				<table>
				<tr>
					<td><img src="images/add-symbol.png" width="20"></td>
					<td><a href="addtables.php" style="color:#fff;">Add New Tables</a></td>
				</tr>
				</table>
			</div>
		</div>
		
			 <table width="100%" cellpadding="1" style="margin-top:5px;">
				
		      <?php
		      /*$query="select * from ecom_pro order by pro_cat asc";
		      $result=db_query($query);
		      $i=0;
		      while($row=mysqli_fetch_assoc($result))
		      { 
		      $i++;
		      ?>
			  <tr <?php if($i%2==0){ echo "bgcolor='#FFFFFF'";}?>>
			  <td><?php echo $i; ?></td>
			  <td><?php echo $row['pro_name']; ?></td>
			  <td>
			  <?php 
			         if($row['pro_cat']=='0')
					 {
					  echo "Root Category";
					 }
					 else
					 {
					 $query1="select * from ecom_cat where cat_id='".$row['pro_cat']."'";
					 $row1=mysqli_fetch_assoc(db_query($query1));
					 echo $row1['cat_name'];
					 }*/
			  ?>
			  </td>
			  <!--<td><a style="color:#006600;" href="editproduct.php?id=<?php //echo $row['pro_id']; ?>">Edit</a></td>
			  <td><a href="productvarient.php?id=<?php //echo $row['pro_id']; ?>" style="color:#006600;">Variant(<?php //var_count($row['pro_id']); ?>)</a></td>
			  
			  <td><a style="color:#FF0000;" onClick="myFunction('<?php //echo $row['pro_id']; ?>')" href="#">Delete</a></td>
			  <td>-->
			  <?php
			  //if($row['pro_status']=='1')
			  //{
			    ?>
			   <!-- <a style="color:#006600;" href="update-status.php?value=0&id=<?php //echo $row['pro_id']; ?>">Active</a>
			    <?php
			  //}
			  //else
			  //{
			    ?>
			    <a style="color:#FF0000;" href="update-status.php?value=1&id=<?php //echo $row['pro_id']; ?>">Inactive</a>-->
			    <?php
			  //}
			  ?>
			  </td>						
			  </tr>
			  <script>
              function myFunction(y)
              {
                var x;
                var r=confirm("Are you sure?");
                
                if (r==true)
                {
					var path1="delproduct.php?id="+ y +"";
					window.open (path1,'_self')
				 }
                else
                {
                  window.open ('','_self')
                }

              }
              </script>
		      <?php
		      //}
		      ?>
		      </table>
		
	</div>

	</div>

	<?php //footer_bar(); ?>


	<?php //clients(); ?>	
	

	<?php footer(); ?>

</body>

</html>

