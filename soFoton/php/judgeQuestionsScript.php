// <?php //require "../includes/common.php";

// $srno=$_GET['srno'];    				
// $sq1 ="select rating from addQuestion where srno='$srno'";
// $sqr1=mysqli_query($con, $sq1) or die(mysqli_error($con));
// $row = mysqli_fetch_array($sqr1);
// $rating = $_POST["rating"];
// $old_rating = $row['rating'];
// $rating = $rating + $old_rating;

// $rating = $_POST["rating"];
// $rating=mysqli_real_escape_string($con, $rating);

// $uq="update addQuestion set rating ='$rating' where srno='$srno'";
// echo $uq;
// $uqr=mysqli_query($con,$uq);
//header('location:judgeQuestions.php');
?>
<?php require "../includes/common.php";

$count=$_GET['count'];    				
$sq1 ="select score from cAddQuestion where id='$count'";
$sqr1=mysqli_query($con, $sq1) or die(mysqli_error($con));
$row = mysqli_fetch_array($sqr1);
$score = $_POST["score"];
$old_score = $row['score'];
$score = $score + $old_score;

$score=mysqli_real_escape_string($con, $score);

$uq="update cAddQuestion set score ='$score' where id='$count'";
echo $uq;
$uqr=mysqli_query($con,$uq);
//header('location:judgeQuestions.php');
?>