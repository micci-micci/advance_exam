<x-layout>
    <x-slot name="title">
        Contact page
    </x-slot>

    <div class="contact">
        <form method="get" action="{{ route('contacts.index')}}">
            <h1 class="contact-ttl">ご意見いただきありがとうございました。</h1>

            <input type="submit" class="btn" value="トップページへ">
        </form>
    </div>
</x-layout>