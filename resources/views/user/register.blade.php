@include('partials.header') 
<header class="max-w-lg mx-auto " >
    <a href="#">
        <h1 class="text-4xl font-bold text-white text-center">Register System</h1>
    </a>
    <br>
    <main class="bg-white max-w-lg mx-auto p-8 my=10 rounded-lg shadow-2xl">
        <section>
            <h3 class="font-bold text 2xl">Welcome to Scoops4U Register</h3>
            <p class="text-gray-600 pt-2">register resellers account</p>
        </section>
        <section class="mt-10">
            <form action="/store"  method="POST"class="flex flex-col">
                @csrf 
                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label for="" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Name</label>
                    <input type="text" name="name" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-400 px-3">
                </div>
                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label for="" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Email</label>
                    <input type="email" name="email" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-400 px-3">
                </div>
                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label for="" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Password</label>
                    <input type="password"  name="password" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-400 px-3">
                </div>
                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label for="password_confirmation" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Confirm Password</label>
                    <input type="password"  name="password_confirmation" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-400 px-3">
                </div>
                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label  class="block text-gray-700 text-sm font-bold mb-2 ml-3">Usertype</label>
                    <select name="access">
                        <option ></option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
               
    
                <button class="bg-purple-600 hover:bg-purple-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200" type="submit">Register</button>

            </form>

        </section>


    </main>

</header>


 

 @include('partials.footer')
    