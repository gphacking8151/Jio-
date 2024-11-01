<?php
$filePath = "../controller.php";
require $filePath;

$amount = "249";

?>

<html>
  <head>
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
      .selected {
        border: 2px solid blue !important;
      }
    </style>
  </head>
  <body>
    <div class="min-h-screen flex items-center justify-center bg-zinc-100 p-4">
      <div class="bg-white rounded-lg shadow-lg p-6 max-w-md w-full">
        <h1 class="text-2xl font-bold text-zinc-900 mb-4">Select the amount and method of payment</h1>
        <div class="mb-6">
          <h2 class="text-lg font-semibold text-zinc-700 mb-2 flex items-center">
            <img aria-hidden="true" alt="payment-method-icon" src="https://openui.fly.dev/openui/24x24.svg?text=💳" class="mr-2" />
            Select method of payment
          </h2>
          <div class="grid grid-cols-2 gap-4">
            <button class="border border-zinc-300 rounded-lg p-4 flex items-center justify-center" onclick="selectButton(this, 'paytm')">
              <img src="/recharge/paytm.svg" alt="Paytm" />
            </button>
            <button class="border border-zinc-300 rounded-lg p-4 flex items-center justify-center" onclick="selectButton(this, 'phonepe')">
              <img src="/recharge/PhonePe-Logo.wine.svg" alt="PhonePe" />
            </button>
            <button class="border border-zinc-300 rounded-lg p-4 flex items-center justify-center" onclick="selectButton(this, 'bhimupi')">
              <img src="/recharge/bhim.svg" alt="BHIM UPI" />
            </button>
            <button class="border border-zinc-300 rounded-lg p-4 flex items-center justify-center" onclick="selectButton(this, 'gpay')">
              <img src="/recharge/Google_Pay-Logo.wine.svg" alt="GPay" />
            </button>
          </div>

          <script>
            let selectedPaymentMethod = null;

            function selectButton(button, method) {
              // Remove 'selected' class from all buttons
              const buttons = document.querySelectorAll('.grid button');
              buttons.forEach(btn => btn.classList.remove('selected'));

              // Add 'selected' class to the clicked button
              button.classList.add('selected');

              // Set selected payment method
              selectedPaymentMethod = method;
            }

            function proceedToCheckout() {
              const email = document.getElementById('email').value;
              if (!email) {
                alert("Please enter your email");
                return;
              }

              if (!selectedPaymentMethod) {
                alert("Please choose a payment method");
                return;
              }

              let url = '';
              switch (selectedPaymentMethod) {
                case 'paytm':
                  url = 'paytmmp://pay?pa=<?php echo $upi ?>&pn=<?php echo $receivername ?>&am=<?php echo $amount ?>&cu=INR';
                  break;
                case 'phonepe':
                  url = 'phonepe://pay?pa=<?php echo $upi ?>&pn=<?php echo $receivername ?>&am=<?php echo $amount ?>&cu=INR';
                  break;
                case 'bhimupi':
                  url = 'upi://pay?pa=<?php echo $upi ?>&pn=<?php echo $receivername ?>&am=<?php $amount ?>&mam=<?php echo $amount ?>&tr=702364820637&tn=Invoice : For Jio Recharge';
                  break;
                case 'gpay':
                  url = 'tez://upi/pay?pa=<?php echo $upi ?>&pn=<?php echo $receivername ?>&am=<?php echo $amount ?>&cu=INR';
                  break;
              }

              window.location.href = url;
            }
          </script>

          <div class="mb-4">
            <label for="email" class="block text-zinc-700 font-medium mb-2">E-mail</label>
            <input type="email" id="email" placeholder="Enter Your E-mail" class="w-full border border-zinc-300 rounded-lg p-3" />
          </div>

          <p class="text-zinc-500 mb-4">You will receive bill on your e-mail in 2 minutes</p>

          <div class="mb-6">
            <p class="text-zinc-700 font-medium mb-2">Approximate amount to pay: ₹<?php echo $amount ?>/-</p>
            <button class="w-full bg-blue-500 text-white p-3 rounded-lg font-semibold" onclick="proceedToCheckout()">Proceed to checkout</button>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
