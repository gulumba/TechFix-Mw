<?php
require_once '../includes/config.php';

// Simple hardcoded admin (change in production)
define('ADMIN_USER', 'admin');
define('ADMIN_PASS', 'techfix2024'); // Change this!

$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $_POST['username'] ?? '';
    $pass = $_POST['password'] ?? '';
    if ($user === ADMIN_USER && $pass === ADMIN_PASS) {
        $_SESSION['admin_logged_in'] = true;
        $_SESSION['admin_user'] = $user;
        header('Location: dashboard.php');
        exit;
    }
    $error = 'Invalid username or password.';
}

if (!empty($_SESSION['admin_logged_in'])) {
    header('Location: dashboard.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login | TechFix Solutions Malawi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
    <style>
        body { min-height: 100vh; display: flex; align-items: center; justify-content: center; background: var(--bg-primary); }
        .login-card { max-width: 420px; width: 100%; }
    </style>
</head>
<body>
    <div class="login-card p-4">
        <div class="text-center mb-4">
            <div class="logo-icon mx-auto mb-3" style="width:56px;height:56px;font-size:1.4rem;">
                <i class="fas fa-satellite-dish"></i>
            </div>
            <h2 class="h4">Admin Login</h2>
            <p class="text-muted small">TechFix Solutions Malawi</p>
        </div>
        <?php if ($error): ?>
            <div class="alert alert-danger py-2"><?php echo htmlspecialchars($error); ?></div>
        <?php endif; ?>
        <form method="POST" class="service-card">
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" name="username" class="form-control" required autofocus>
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-danger w-100">Sign In</button>
        </form>
        <p class="text-center mt-3 mb-0"><a href="../index.php" class="text-muted small"><i class="fas fa-arrow-left me-1"></i> Back to website</a></p>
    </div>
</body>
</html>
