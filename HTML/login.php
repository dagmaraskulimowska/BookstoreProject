<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Księgarnia "Książek"</title>
    <style type="text/css">
 	@import url('../CSS/navBar.css');
</style>

</head>
<body>
    <nav class="logo">
      <h1>KSIĄŻEK</h1>
            <nav class="navbar">
                <ul>
          <li><input type="text" placeholder="Wyszukaj..."></li>
                    <li><a href="../homePage.php">Strona główna</a></li>
                    <li><a href="#">Koszyk</a></li>
                    <li>
                    <a href="login.php">Logowanie</a>
                </li>
                </ul>
            </nav>
        </div>




    <head>
        <style type="text/css">
 	@import url('../CSS/login.css');
    </style>
    </head>

        <div class="login">
  <div class="w-full max-w-md space-y-8">
    <div>

      <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">Zaloguj się do istniejącego konta</h2>
      <p class="mt-2 text-center text-sm text-gray-600">
        Chcesz zostać stałym użytkownikiem?
        <p class="mt-2 text-center text-sm text-gray-600"> 
        <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">Zarejestruj swoje konto tutaj! </a>
      </p>
</p>
    </div>
    <form class="mt-8 space-y-6" action="#" method="POST">
      <input type="hidden" name="remember" value="true">
      <div class="-space-y-px rounded-md shadow-sm">
        <div>
          <label for="email-address" class="sr-only">Podaj swój email</label>
          <input id="email-address" name="email" type="email" autocomplete="email" required class="relative block w-full rounded-t-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Email address">
        </div>
        <div>
          <label for="password" class="sr-only">Podaj hasło</label>
          <input id="password" name="password" type="password" autocomplete="current-password" required class="relative block w-full rounded-b-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Password">
        </div>
      </div>

      <div class="remember-me">
        <div class="flex items-center">
        <p></p>
          <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
          <label for="remember-me" class="ml-2 block text-sm text-gray-900">Zapamiętaj moje dane logowania</label> 
        </div>

        <div class="text-sm">
          <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">Przypomnij hasło</a>
        </div>
      </div>

      <div>
        <button type="submit" class="group relative flex w-full justify-center rounded-md bg-indigo-600 py-2 px-3 text-sm font-semibold text-white hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
          <span class="absolute inset-y-0 left-0 flex items-center pl-3">
              <path fill-rule="evenodd" d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z" clip-rule="evenodd" />
            </svg>
          Zaloguj się
        </button>
      </div>
    </form>
  </div>
</div>

</body>
</html>
