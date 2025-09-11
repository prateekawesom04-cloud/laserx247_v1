<!DOCTYPE html>
<html lang="en">
@include('head')

<body>
    @include('admin.header')
    @include('admin.navbar')
    @yield('body')
    @include('admin.model.add_user')
    @include('admin.model.add_banner')
    @include('admin.model.add_downline')
    @include('admin.model.add_message')
    @include('admin.model.agent_rolling_commission')
    @include('admin.model.change_password')
    @include('admin.model.creadit_ref')
    @include('admin.model.delete')
    @include('admin.model.deposit_withdraw')
    @include('admin.model.rolling_commission')
    @include('admin.model.sports_setting')
    @include('admin.model.status_change')
    @yield('js')
</body>

</html>
