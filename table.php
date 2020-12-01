  <table>
      	<tr>
      		<th>Firstname</th>
      		<th>Lastname</th>
      		<th>Blood Group</th>
      		<th>Address</th>
      		<th>Contact</th>
      	</tr>
      	<?php 
      		$sql = "SELECT firstname, lastname, bloodgroup, address, contact FROM register WHERE ";
      		$result = $conn-> query($sql);

      		if ($result -> num_rows > 0) {
      			while ($row = $result-> fetch_assoc()) {
      				echo "<tr><td>". $row["firstname"]. "</tr></td>".
      					  "<tr><td>". $row["lastname"]. "</tr></td>".
      					  "<tr><td>". $row["bloodgroup"]. "</tr></td>".
      					  "<tr><td>". $row["address"]. "</tr></td>".
      					  "<tr><td>". $row["contact"]. "</tr></td>";
      			}
      			echo "</table>";
      		} else {
      			echo "0 Result!!";
      		}
      		$conn-> close();
      	 ?>
      </table>