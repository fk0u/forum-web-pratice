<?php
// Simulasi pemrosesan edit profil
// Di sini Anda akan melakukan pemrosesan data masuk, validasi, dan penyimpanan ke database

// Simpan pesan notifikasi
$notificationMessage = "Profile updated successfully!";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Profile</title>
</head>
<body>
  <header>
    <h1>My Profile</h1>
    <nav>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Dashboard</a></li>
        <li><a href="#">Logout</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <section class="profile">
      <div class="profile-details">
        <h2>Edit Profile</h2>
        <form action="update-profile.php" method="post">
          <label for="username">Username:</label>
          <input type="text" id="username" name="username" required>

          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required>

          <button type="submit">Save</button>
        </form>
      </div>
    </section>
  </main>

  <script>
    var notificationMessage = "<?php echo $notificationMessage; ?>";
    if (notificationMessage !== "") {
      showNotification(notificationMessage);
    }

    function showNotification(message) {
      var notification = document.createElement("div");
      notification.className = "notification";
      notification.innerText = message;

      document.body.appendChild(notification);

      setTimeout(function() {
        notification.style.display = "none";
        document.body.removeChild(notification);
      }, 3000); // Hide after 3 seconds
    }
  </script>
</body>
</html>
