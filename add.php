 <?php 
 
 include_once('config.php');
 
 if(isset ($_POST['Submit'])  )			{
	 
 $first_name = NULL;
  $last_name = $_POST['last_name'];
   $job_title = $_POST['job_title'];
    $salary = $_POST['salary'];
	 $notes = $_POST['notes'];

 try { 
	 $sql = "INSERT INTO employee (first_name, last_name, job_title, salary, notes)
	 VALUES
	 (:first_name, :last_name, :job_title, :salary, :notes)";
	 
	 $query = $dbConn->prepare($sql);
	 $query->bindparam(':first_name', $first_name);
	 $query->bindparam(':last_name', $last_name);
	 $query->bindparam(':job_title', $job_title);
	 $query->bindparam(':salary', $salary);
	 $query->bindparam(':notes', $notes);
	 $query->execute();


 }catch(PDOException $e) {
	 
	 echo "Your fail Message:".$e->getMessage();
	 }
	 
	 
	 header("Location:index.php"); 

	 	 
 }
 
 ?>