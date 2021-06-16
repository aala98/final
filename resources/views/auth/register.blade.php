<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>
            <!-- prenom -->
            <div>
                <x-label for="prenom" :value="__('prenom')" />

                <x-input id="prenom" class="block mt-1 w-full" type="text" name="prenom" :value="old('prenom')"  />
            </div>

            <!-- tel -->
            <div>
                <x-label for="tel" :value="__('tel')" />

                <x-input id="tel" class="block mt-1 w-full" type="text" name="tel" :value="old('tel')" required autofocus />
            </div>
            <!-- adresse -->
            <div>
                <x-label for="adresse" :value="__('adresse')" />

                <x-input id="adresse" class="block mt-1 w-full" type="text" name="adresse" :value="old('adresse')" required autofocus />
            </div>
            <!-- ville -->
            <div class="mt-4">
                <x-label for="ville" value="{{ __('ville') }}" />
                <select name="ville" class="block mt-1 w-full border-gray-300
                     focus:border-indigo-300 focus:ring focus:ring-indigo-200
                      focus:ring-opacity-50 rounded-md shadow-sm">
                             <option value="Ariana">Ariana</option>
                             <option value="Béja">Béja</option>
                             <option value="Ben Arous">Ben Arous</option>
                             <option value="Bizerte">Bizerte</option>
                             <option value="Gabès">Gabès</option>
                             <option value="Gafsa">Gafsa</option>
                             <option value="Jendouba">Jendouba</option>
                             <option value="Kairouan">Kairouan</option>
                             <option value="Kasserine">Kasserine</option>
                             <option value="Kébili">Kébili</option>
                             <option value="Le Kef">Le Kef</option>
                             <option value="Mahdia">Mahdia</option>
                             <option value="La Manouba">La Manouba</option>
                             <option value="Médenine">Médenine</option>
                             <option value="Monastir">Monastir</option>
                             <option value="Nabeul">Nabeul</option>
                             <option value="Sfax">Sfax</option>
                             <option value="Sidi Bouzid">Sidi Bouzid</option>
                             <option value="Siliana">Siliana</option>
                             <option value="Tataouine">Tataouine</option>
                             <option value="Tozeur">Tozeur</option>
                             <option value="Tunis">Tunis</option>
                             <option value="Zaghouan">Zaghouan</option>
                         </select>
                    </div>


            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

               <!-- date_nessaince -->
               <div>
                <x-label for="date_nessaince" :value="__('date_nessaince')" />

                <x-input id="date_nessaince" class="block mt-1 w-full" type="date" name="date_nessaince" :value="old('date_nessaince')" required autofocus />
            </div>

                <!-- sexe -->

            <div class="mt-4">
                <x-label for="sexe" value="{{ __('Gender:') }}" />
                <select name="sexe" class="block mt-1 w-full border-gray-300
                     focus:border-indigo-300 focus:ring focus:ring-indigo-200
                      focus:ring-opacity-50 rounded-md shadow-sm">
                             <option value="Male">Male</option>
                             <option value="Female">Female</option>


                </select>
            </div>

                <!-- image -->
              <div>
                <x-label for="image" :value="__('image')" />

                <x-input id="image" class="block mt-1 w-full" type="file" name="image" />
            </div>

            <!--select Option Rol type-->

            <div class="mt-4">
                <x-label for="role_id" value="{{ __('Register as:') }}" />
                <select name="role_id" class="block mt-1 w-full border-gray-300
                     focus:border-indigo-300 focus:ring focus:ring-indigo-200
                      focus:ring-opacity-50 rounded-md shadow-sm">
                             <option value="user">User</option>
                             <option value="Avocats">Avocats</option>
                             <option value="medecins">Medecins</option>
                             <option value="ingénieurs">ingénieurs</option>
                             <option value="notaire">notaire</option>
                             <option value="dentiste">dentiste</option>
                             <option value="pediatrie">pediatrie</option>
                             <option value="neurologie">neurologie</option>
                             <option value="orthopédie">orthopédie</option>
                             <option value="sychiatrie">sychiatrie</option>
                             <option value="ophtalmologie">ophtalmologie</option>
                             <option value="otorhinolaryngologie">otorhinolaryngologie</option>

                             <option value="super">Super</option>


                </select>
            </div>
            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
