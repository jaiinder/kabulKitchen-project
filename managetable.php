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
				<!--
				<table>
				<tr>
					<td><img src="images/add-symbol.png" width="20"></td>
					<td><a href="managetable.php" style="color:#fff;">Manage Tables</a></td>
				</tr>
				</table>
				-->
			</div>
		</div>
		
			  <table width="100%" cellpadding="4" style="margin-top:5px;">
		      <tr style="background-color:#000000; color:#CCCCCC;">
		      <td>Table Name</td>
			 
		      <td>Table Person</td>
		      <td>Edit</td>
		      
		      </tr>
		      <?php
		      $query="select * from tables";
		      $result=db_query($query);
		      $i=0;
		      while($row=mysqli_fetch_assoc($result))
		      { 
		     
		      ?>
			  <tr <?php if($i%2==0){ echo "bgcolor='#FFFFFF'";}?>>
			  <td><?php echo $row['tb_name']; ?></td>
			  
			  <td><?php echo $row['tb_person']; ?></td>
			  <td><a style="color:#006600;" href="edit_table.php?id=<?php echo $row['tb_id']; ?>">Edit</a></td>
			  <!--<td><a style="color:#FF0000;" onClick="myFunction('<?php //echo $row['tb_id']; ?>')" href="#">Delete</a></td>-->
			  <td>
			  
			  </td>
			 
			  
			  
			  <td>
			  
				
				
			  </td>					
			  </tr>
			  <script>
              function myFunction(y)
              {
                var x;
                var r=confirm("Are you sure?");
                
                if (r==true)
                {
					var path1="delcategory.php?id="+ y +"";
					window.open (path1,'_self')
				 }
                else
                {
                  window.open ('','_self')
                }

              }
              </script>
		      <?php
		      }
		      ?>
		      </table>
		
	</div>

	</div>
	<?php //footer_bar(); ?>


	<?php //clients(); ?>	
	

	<?php footer(); ?>

</body>

</html>

