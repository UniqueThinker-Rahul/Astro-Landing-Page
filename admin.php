<?php
session_start();

// 1. Simple Security Configuration
$admin_password = "admin123"; // CHANGE THIS PASSWORD!
$leads_file = "leads.txt";

// 2. Handle Login
if (isset($_POST['password'])) {
    if ($_POST['password'] === $admin_password) {
        $_SESSION['logged_in'] = true;
    } else {
        $error = "Invalid Password";
    }
}

// 3. Handle Logout
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: admin.php");
    exit;
}

// 4. Check Authentication
$is_logged_in = isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Param Shakti</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: { astroDark: '#0F172A', astroGold: '#F59E0B' }
                }
            }
        }
    </script>
</head>
<body class="bg-astroDark text-gray-200 min-h-screen p-6">

    <?php if (!$is_logged_in): ?>
        <div class="max-w-md mx-auto mt-20 bg-white/5 border border-white/10 p-8 rounded-2xl backdrop-blur-md">
            <div class="text-center mb-6">
                <i data-lucide="lock" class="w-12 h-12 text-astroGold mx-auto mb-2"></i>
                <h2 class="text-2xl font-bold text-white">Admin Login</h2>
            </div>
            
            <?php if (isset($error)): ?>
                <div class="bg-red-500/20 text-red-300 p-3 rounded mb-4 text-center"><?php echo $error; ?></div>
            <?php endif; ?>

            <form method="POST">
                <input type="password" name="password" placeholder="Enter Password" required
                       class="w-full bg-black/30 border border-white/10 rounded px-4 py-3 text-white mb-4 focus:border-astroGold outline-none">
                <button type="submit" class="w-full bg-astroGold text-astroDark font-bold py-3 rounded hover:bg-yellow-400 transition">
                    Unlock Dashboard
                </button>
            </form>
        </div>

    <?php else: ?>
        <div class="max-w-6xl mx-auto">
            <div class="flex justify-between items-center mb-8 border-b border-white/10 pb-4">
                <h1 class="text-3xl font-bold text-white flex items-center gap-3">
                    <i data-lucide="layout-dashboard" class="text-astroGold"></i> 
                    Leads Dashboard
                </h1>
                <a href="?logout=true" class="bg-red-500/10 hover:bg-red-500/30 text-red-400 px-4 py-2 rounded border border-red-500/20 transition">
                    Logout
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <div class="bg-white/5 border border-white/10 p-6 rounded-xl">
                    <h3 class="text-slate-400 text-sm uppercase tracking-wider">Total Leads</h3>
                    <?php 
                        $lines = file_exists($leads_file) ? count(file($leads_file)) : 0;
                        echo "<p class='text-4xl font-bold text-white mt-2'>$lines</p>";
                    ?>
                </div>
            </div>

            <div class="bg-white/5 border border-white/10 rounded-xl overflow-hidden">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-white/5 text-slate-300 text-sm uppercase">
                            <th class="p-4 border-b border-white/10">Date</th>
                            <th class="p-4 border-b border-white/10">Name</th>
                            <th class="p-4 border-b border-white/10">Phone</th>
                            <th class="p-4 border-b border-white/10">Service</th>
                            <th class="p-4 border-b border-white/10">Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-white/5">
                        <?php
                        if (file_exists($leads_file)) {
                            $leads = array_reverse(file($leads_file)); // Show newest first
                            foreach ($leads as $lead) {
                                // Parse the log format: [Date] Name | Phone | Service
                                // Using regex or simple string manipulation
                                preg_match('/\[(.*?)\] New Lead: (.*?) \| Phone: (.*?) \| Service: (.*)/', $lead, $matches);
                                
                                if (count($matches) >= 4) {
                                    echo "<tr class='hover:bg-white/5 transition'>";
                                    echo "<td class='p-4 text-slate-400 text-sm'>{$matches[1]}</td>";
                                    echo "<td class='p-4 font-semibold text-white'>{$matches[2]}</td>";
                                    echo "<td class='p-4 text-astroGold'>{$matches[3]}</td>";
                                    echo "<td class='p-4'><span class='bg-astroGold/10 text-astroGold text-xs px-2 py-1 rounded'>{$matches[4]}</span></td>";
                                    echo "<td class='p-4'>
                                            <a href='https://wa.me/" . str_replace(['+', ' '], '', $matches[3]) . "' target='_blank' 
                                               class='text-green-400 hover:text-green-300 flex items-center gap-1 text-sm'>
                                               <i data-lucide='message-circle' class='w-4 h-4'></i> Chat
                                            </a>
                                          </td>";
                                    echo "</tr>";
                                }
                            }
                        } else {
                            echo "<tr><td colspan='5' class='p-8 text-center text-slate-500'>No leads found yet.</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    <?php endif; ?>

    <script>
        lucide.createIcons();
    </script>
</body>
</html>