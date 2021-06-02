@include('components.resetLocalStorage')


<h1>JE BENT VERBANNEN</h1>
<h2>denk voortaan wat meer na...</h2>
<form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log uit') }}
                            </x-dropdown-link>
                        </form></li>
<img src="\storage\images\pepe.webp" alt="Een zielige kikker">