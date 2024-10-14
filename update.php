<?php
require 'config.php';

if($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $id = $_POST['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];

    $sql = $conn->prepare("UPDATE users SET username = ?, email = ? WHERE id = ?");
    $sql->execute();

    echo "User Updated";
}
$id = 1;
$sql = $conn->prepare("SELECT * FROM users WHERE id = ?");
$sql->bind_param("i", $id);
$sql->execute();
$result = $sql->get_result();
$user = $result->fetch_assoc();
?>

<form method="POST" action="">
    <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
    <input type="text" name="username" value="<?php echo $user['username']; ?>" required>
    <input type="email" name="email" value="<?php echo $user['email']; ?>" required>
    <button type="submit">Update User</button>
    <?php
    // header("Location: read.php");
    ?>
</form>