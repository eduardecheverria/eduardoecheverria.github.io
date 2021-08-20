<table class="mostrardatos">
			   <tr>
			    <th>Profesor</th>
			    <th>Nombre de software</th>
			    <th>Notas</th>
			    <th>Link local</th>
			    <th>Link externo</th>
			    <th>Status</th>
			  </tr>
			<?php
				 $consulta2="SELECT * FROM `solicitud`";
					$resultado2=mysqli_query($con,$consulta2);
					
				 while($row2=mysqli_fetch_array($resultado2,MYSQLI_NUM)){ 
						echo "						
					  <tr>
					    <td>".$row2[4]."</td>
					    <td>".$row2[3]."</td>
					    <td>".$row2[2]."</td>
					    <td><a class='linktabla' href='http://localhost:8080/tics/software'>C:/xampp/htdocs/tics/software/".$row2[0]."</a></td>
					    <td><a class='linktabla' href='".$row2[1]."'>".$row2[1]."</a></td>
					     <td>
					     ";
					     	if ($row2[5]=="En espera") {
							     		echo"
										     	<select>
													<option selected style='color:red;' value='En espera'>En espera</option>
													<option style='color:orange;' value='En progreso'>En progreso</option>
													<option style='color:green;' value='Completado'>Completado</option>
												</select>
											</td>
										  </tr> ";
							}
							if ($row2[5]=="En progreso") {
							     		echo"
							     				<select>
													<option style='color:red;' value='En espera'>En espera</option>
													<option selected style='color:orange;' value='En progreso'>En progreso</option>
													<option style='color:green;' value='Completado'>Completado</option>
												</select>
											</td>
										  </tr> ";
							}
							if ($row2[5]=="Completada") {
							     		echo"
							     				<select >
													<option style='color:red;' value='En espera'>En espera</option>
													<option style='color:orange;' value='En progreso'>En progreso</option>
													<option selected style='color:green;' value='Completada'>Completada</option>
												</select>
											</td>
										  </tr> ";
							}
					}
					     	
			  ?>
			</table>
			
			
		</form>