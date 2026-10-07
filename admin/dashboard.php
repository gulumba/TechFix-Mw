<?php
require_once 'auth.php';

$enquiries = load_data('enquiries');
$appliance = load_data('appliance_bookings');
$computer = load_data('computer_requests');
$tracking = load_data('tracking_requests');

$total = count($enquiries);
$pending = count(array_filter($enquiries, fn($e) => ($e['status'] ?? '') === 'pending'));
$completed = count(array_filter($enquiries, fn($e) => ($e['status'] ?? '') === 'completed'));
$new_today = count(array_filter($enquiries, fn($e) => substr($e['created_at'] ?? '', 0, 10) === date('Y-m-d')));

// Sort newest first
usort($enquiries, fn($a, $b) => strcmp($b['created_at'] ?? '', $a['created_at'] ?? ''));
$recent = array_slice($enquiries, 0, 10);

// Status update
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_status'])) {
    $id = $_POST['id'] ?? '';
    $new_status = $_POST['status'] ?? 'pending';
    $file = $_POST['file'] ?? 'enquiries';
    $data = load_data($file);
    foreach ($data as &$item) {
        if (($item['id'] ?? '') === $id) {
            $item['status'] = $new_status;
            break;
        }
    }
    save_data($file, $data);
    // Also update in enquiries if different file
    if ($file !== 'enquiries') {
        $all = load_data('enquiries');
        foreach ($all as &$item) {
            if (($item['id'] ?? '') === $id) {
                $item['status'] = $new_status;
                break;
            }
        }
        save_data('enquiries', $all);
    }
    header('Location: dashboard.php?updated=1');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | TechFix Solutions Malawi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
    <style>
        .admin-sidebar { min-height: 100vh; background: var(--bg-secondary); border-right: 1px solid var(--border); }
        .stat-card { background: var(--bg-card); border: 1px solid var(--border); border-radius: 12px; padding: 1.25rem; }
        .stat-card h3 { font-size: 1.75rem; margin: 0; }
        .table { color: var(--text-secondary); }
        .table thead th { color: white; border-color: var(--border); font-size: 0.85rem; }
        .table td { border-color: var(--border); vertical-align: middle; font-size: 0.9rem; }
        .badge-pending { background: #f59e0b; }
        .badge-completed { background: #10b981; }
        .badge-cancelled { background: #6b7280; }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-lg-2 admin-sidebar p-3">
                <div class="d-flex align-items-center mb-4">
                    <div class="logo-icon me-2" style="width:36px;height:36px;font-size:0.9rem;"><i class="fas fa-satellite-dish"></i></div>
                    <span class="fw-bold small">TechFix Admin</span>
                </div>
                <nav class="nav flex-column gap-1">
                    <a class="nav-link active text-white" href="dashboard.php"><i class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a class="nav-link text-secondary" href="dashboard.php#enquiries"><i class="fas fa-inbox me-2"></i>Enquiries</a>
                    <a class="nav-link text-secondary" href="../index.php" target="_blank"><i class="fas fa-external-link-alt me-2"></i>View Site</a>
                    <a class="nav-link text-secondary" href="logout.php"><i class="fas fa-sign-out-alt me-2"></i>Logout</a>
                </nav>
            </div>
            <div class="col-md-9 col-lg-10 p-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h1 class="h4 mb-0">Dashboard</h1>
                    <span class="text-muted small">Logged in as <?php echo htmlspecialchars($_SESSION['admin_user'] ?? 'admin'); ?></span>
                </div>

                <?php if (isset($_GET['updated'])): ?>
                    <div class="alert alert-success py-2">Status updated successfully.</div>
                <?php endif; ?>

                <div class="row g-3 mb-4">
                    <div class="col-6 col-md-3">
                        <div class="stat-card">
                            <p class="text-muted small mb-1">Total Enquiries</p>
                            <h3><?php echo $total; ?></h3>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="stat-card">
                            <p class="text-muted small mb-1">Pending</p>
                            <h3 class="text-warning"><?php echo $pending; ?></h3>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="stat-card">
                            <p class="text-muted small mb-1">Completed</p>
                            <h3 class="text-success"><?php echo $completed; ?></h3>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="stat-card">
                            <p class="text-muted small mb-1">New Today</p>
                            <h3><?php echo $new_today; ?></h3>
                        </div>
                    </div>
                </div>

                <div class="row g-3 mb-4">
                    <div class="col-md-4">
                        <div class="stat-card">
                            <p class="text-muted small mb-1"><i class="fas fa-plug text-danger me-1"></i> Appliance Bookings</p>
                            <h3><?php echo count($appliance); ?></h3>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="stat-card">
                            <p class="text-muted small mb-1"><i class="fas fa-laptop text-danger me-1"></i> Computer Requests</p>
                            <h3><?php echo count($computer); ?></h3>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="stat-card">
                            <p class="text-muted small mb-1"><i class="fas fa-map-marker-alt text-danger me-1"></i> Tracking Requests</p>
                            <h3><?php echo count($tracking); ?></h3>
                        </div>
                    </div>
                </div>

                <h2 class="h5 mb-3" id="enquiries">Recent Enquiries & Requests</h2>
                <div class="table-responsive service-card p-0">
                    <table class="table table-dark table-hover mb-0">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Type</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (empty($recent)): ?>
                                <tr><td colspan="6" class="text-center text-muted py-4">No enquiries yet.</td></tr>
                            <?php else: ?>
                                <?php foreach ($recent as $e): ?>
                                    <tr>
                                        <td class="small"><?php echo htmlspecialchars(substr($e['created_at'] ?? '', 0, 16)); ?></td>
                                        <td><?php echo htmlspecialchars($e['full_name'] ?? ''); ?></td>
                                        <td>
                                            <a href="tel:<?php echo htmlspecialchars($e['phone'] ?? ''); ?>" class="text-accent"><?php echo htmlspecialchars($e['phone'] ?? ''); ?></a>
                                        </td>
                                        <td><span class="badge bg-secondary"><?php echo htmlspecialchars($e['form_type'] ?? $e['service'] ?? ''); ?></span></td>
                                        <td>
                                            <?php
                                            $st = $e['status'] ?? 'pending';
                                            $cls = $st === 'completed' ? 'badge-completed' : ($st === 'cancelled' ? 'badge-cancelled' : 'badge-pending');
                                            ?>
                                            <span class="badge <?php echo $cls; ?>"><?php echo ucfirst($st); ?></span>
                                        </td>
                                        <td>
                                            <form method="POST" class="d-inline">
                                                <input type="hidden" name="id" value="<?php echo htmlspecialchars($e['id'] ?? ''); ?>">
                                                <input type="hidden" name="file" value="enquiries">
                                                <select name="status" class="form-select form-select-sm d-inline-block w-auto" onchange="this.form.submit()">
                                                    <option value="pending" <?php echo $st==='pending'?'selected':''; ?>>Pending</option>
                                                    <option value="completed" <?php echo $st==='completed'?'selected':''; ?>>Completed</option>
                                                    <option value="cancelled" <?php echo $st==='cancelled'?'selected':''; ?>>Cancelled</option>
                                                </select>
                                                <input type="hidden" name="update_status" value="1">
                                            </form>
                                        </td>
                                    </tr>
                                    <?php if (!empty($e['message'])): ?>
                                    <tr>
                                        <td colspan="6" class="small text-muted pt-0 pb-2">
                                            <strong>Message:</strong> <?php echo htmlspecialchars($e['message']); ?>
                                            <?php if (!empty($e['appliance_type'])): ?> | Appliance: <?php echo htmlspecialchars($e['appliance_type']); ?><?php endif; ?>
                                            <?php if (!empty($e['location'])): ?> | Location: <?php echo htmlspecialchars($e['location']); ?><?php endif; ?>
                                        </td>
                                    </tr>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
