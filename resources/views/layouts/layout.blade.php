<!doctype html>
<html lang="pt-br">

@component('components.head')
@endcomponent

<body>

{{--<!--================Header Menu Area =================-->--}}
@component('components.header-menu-area')
@endcomponent
{{--<!--================Header Menu Area =================-->--}}

@yield('conteudo')

{{--<!--================ start footer Area =================-->--}}
@component('components.footer')
@endcomponent
{{--<!--================ End footer Area =================-->--}}


{{--<!--================ start scripts =================-->--}}
@component('components.scripts')
@endcomponent
{{--<!--================ start scripts =================-->--}}

</body>

</html>