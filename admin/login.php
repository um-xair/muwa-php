<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Login Card</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-gradient-to-r from-violet-200 to-pink-200 flex items-center justify-center h-screen p-6">

    <div class="bg-white shadow-lg overflow-hidden w-full max-w-md rounded-[30px]">
        <div class="p-8">
            <img src="https://www.muwababy.com/assets/muwa.png" alt="Logo" class="mx-auto mb-6 w-40">
            <h2 class="text-lg font-semibold mb-6 text-center text-black mb-2">Login to Your Account</h2>
            <form>
                <div class="relative mb-4">
                    <input type="email" placeholder="Email" class="border border-gray-300 p-2 rounded-[12px] w-full pr-10" required>
                    <i class="fa fa-envelope absolute right-3 top-3 text-gray-600"></i>
                </div>
                <div class="relative mb-6">
                    <input id="password" type="password" placeholder="Password" class="border border-gray-300 p-2 rounded-[12px] w-full pr-10" required>
                    <i id="toggle-password" class="fa fa-eye absolute right-3 top-3 text-gray-600 cursor-pointer"></i>
                </div>
                <button type="submit" class="bg-[#614EF7] text-white font-semibold py-3 rounded-[30px] w-full transition-transform duration-300 transform hover:scale-105">
                    Login
                </button>
            </form>
        </div>
    </div>

    <script>
        // Password visibility toggle
        const passwordInput = document.getElementById('password');
        const togglePassword = document.getElementById('toggle-password');

        togglePassword.addEventListener('click', () => {
            const isPasswordHidden = passwordInput.getAttribute('type') === 'password';
            
            // Toggle the input type
            passwordInput.setAttribute('type', isPasswordHidden ? 'text' : 'password');

            // Toggle the eye icon class
            togglePassword.classList.toggle('fa-eye');
            togglePassword.classList.toggle('fa-eye-slash');
        });
    </script>
</body>
</html>
