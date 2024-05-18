<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('Дякуємо за реєстрацію! Перш ніж почати, перевірте, будь ласка, свою електронну адресу, перейшовши за посиланням, яке ми щойно надіслали вам на електронну пошту. Якщо ви не отримали листа, ми з радістю надішлемо вам ще один.') }}
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
            {{ __('На електронну адресу, яку ви вказали під час реєстрації, надіслано нове посилання для підтвердження.') }}
        </div>
    @endif

    <div class="mt-4 flex items-center justify-between">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div>
                <x-primary-button>
                    {{ __('Повторно надіслати електронний лист з підтвердженням') }}
                </x-primary-button>
            </div>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                {{ __('Вийти') }}
            </button>
        </form>
    </div>
</x-guest-layout>
