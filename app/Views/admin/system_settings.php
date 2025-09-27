<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>System Settings</title>
  <meta name="description" content="This is the admin dashboard page.">
  <meta name="author" content="Your Name">  
  <link rel="stylesheet" href="/assets/css/styles.css">
  <link rel="icon" type="image/x-icon" href="/assets/favicon.ico">
</head>

<body class="min-h-screen flex flex-col bg-base-200">
  <div class="container m-auto p-4 text-center">
    <h1 class="text-2xl font-bold text-blue-700"><?= 'Admin Dashboard - Welcome, ' . auth()->user()->username; ?></h1>
    <h2 class="text-5xl text-red-500">System Settings</h2>
    <p class="text-gray-700 pt-4">Manage your system settings here.</p>
  </div>
</body>

</html>