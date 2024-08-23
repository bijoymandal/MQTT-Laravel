{{--<section>--}}
{{--    <header>--}}
{{--        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">--}}
{{--            {{ __('Update Password') }}--}}
{{--        </h2>--}}

{{--        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">--}}
{{--            {{ __('Ensure your account is using a long, random password to stay secure.') }}--}}
{{--        </p>--}}
{{--    </header>--}}

{{--    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">--}}
{{--        @csrf--}}
{{--        @method('put')--}}

{{--        <div>--}}
{{--            <x-input-label for="update_password_current_password" :value="__('Current Password')" />--}}
{{--            <x-text-input id="update_password_current_password" name="current_password" type="password" class="mt-1 block w-full" autocomplete="current-password" />--}}
{{--            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <div>--}}
{{--            <x-input-label for="update_password_password" :value="__('New Password')" />--}}
{{--            <x-text-input id="update_password_password" name="password" type="password" class="mt-1 block w-full" autocomplete="new-password" />--}}
{{--            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <div>--}}
{{--            <x-input-label for="update_password_password_confirmation" :value="__('Confirm Password')" />--}}
{{--            <x-text-input id="update_password_password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" autocomplete="new-password" />--}}
{{--            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <div class="flex items-center gap-4">--}}
{{--            <x-primary-button>{{ __('Save') }}</x-primary-button>--}}

{{--            @if (session('status') === 'password-updated')--}}
{{--                <p--}}
{{--                    x-data="{ show: true }"--}}
{{--                    x-show="show"--}}
{{--                    x-transition--}}
{{--                    x-init="setTimeout(() => show = false, 2000)"--}}
{{--                    class="text-sm text-gray-600 dark:text-gray-400"--}}
{{--                >{{ __('Saved.') }}</p>--}}
{{--            @endif--}}
{{--        </div>--}}
{{--    </form>--}}
{{--</section>--}}
<x-app-layout>
<div class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        Change Password
    </h2>
</div>
<div class="grid grid-cols-12 gap-6">
    <!-- BEGIN: Profile Menu -->
    <div class="col-span-12 lg:col-span-4 2xl:col-span-3 flex lg:block flex-col-reverse">
        <div class="intro-y box mt-5">
            <div class="relative flex items-center p-5">
                <div class="w-12 h-12 image-fit">
                    <img alt="Midone - HTML Admin Template" class="rounded-full" src="dist/images/profile-6.jpg">
                </div>
                <div class="ml-4 mr-auto">
                    <div class="font-medium text-base">Leonardo DiCaprio</div>
                    <div class="text-slate-500">DevOps Engineer</div>
                </div>
                <div class="dropdown">
                    <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown"> <i data-lucide="more-horizontal" class="w-5 h-5 text-slate-500"></i> </a>
                    <div class="dropdown-menu w-56">
                        <ul class="dropdown-content">
                            <li>
                                <h6 class="dropdown-header">
                                    Export Options
                                </h6>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a href="" class="dropdown-item"> <i data-lucide="activity" class="w-4 h-4 mr-2"></i> English </a>
                            </li>
                            <li>
                                <a href="" class="dropdown-item">
                                    <i data-lucide="box" class="w-4 h-4 mr-2"></i> Indonesia
                                    <div class="text-xs text-white px-1 rounded-full bg-danger ml-auto">10</div>
                                </a>
                            </li>
                            <li>
                                <a href="" class="dropdown-item"> <i data-lucide="layout" class="w-4 h-4 mr-2"></i> English </a>
                            </li>
                            <li>
                                <a href="" class="dropdown-item"> <i data-lucide="sidebar" class="w-4 h-4 mr-2"></i> Indonesia </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <div class="flex p-1">
                                    <button type="button" class="btn btn-primary py-1 px-2">Settings</button>
                                    <button type="button" class="btn btn-secondary py-1 px-2 ml-auto">View Profile</button>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                <a class="flex items-center " href=""> <i data-lucide="activity" class="w-4 h-4 mr-2"></i> Personal Information </a>
                <a class="flex items-center mt-5" href=""> <i data-lucide="box" class="w-4 h-4 mr-2"></i> Account Settings </a>
                <a class="flex items-center mt-5 text-primary font-medium" href=""> <i data-lucide="lock" class="w-4 h-4 mr-2"></i> Change Password </a>
                <a class="flex items-center mt-5" href=""> <i data-lucide="settings" class="w-4 h-4 mr-2"></i> User Settings </a>
            </div>
            <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                <a class="flex items-center" href=""> <i data-lucide="activity" class="w-4 h-4 mr-2"></i> Email Settings </a>
                <a class="flex items-center mt-5" href=""> <i data-lucide="box" class="w-4 h-4 mr-2"></i> Saved Credit Cards </a>
                <a class="flex items-center mt-5" href=""> <i data-lucide="lock" class="w-4 h-4 mr-2"></i> Social Networks </a>
                <a class="flex items-center mt-5" href=""> <i data-lucide="settings" class="w-4 h-4 mr-2"></i> Tax Information </a>
            </div>
            <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400 flex">
                <button type="button" class="btn btn-primary py-1 px-2">New Group</button>
                <button type="button" class="btn btn-outline-secondary py-1 px-2 ml-auto">New Quick Link</button>
            </div>
        </div>
    </div>
    <!-- END: Profile Menu -->
    <div class="col-span-12 lg:col-span-8 2xl:col-span-9">
        <!-- BEGIN: Change Password -->
        <div class="intro-y box lg:mt-5">
            <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                <h2 class="font-medium text-base mr-auto">
                    Change Password
                </h2>
            </div>
            <div class="p-5">
                <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
                    @csrf
                    @method('put')
                <div>
                    <x-input-label for="change-password-form" :value="__('Current Password')" />
                    <x-text-input id="change-password-form" name="current_password" type="password" class="form-control" autocomplete="current-password"/>
                    <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                </div>
                <div class="mt-3">
                    <label for="change-password-form-2" class="form-label">New Password</label>
                    <input id="change-password-form-2" type="password" name="password" class="form-control" placeholder="password" autocomplete="new-password"/>
                    <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                </div>
                <div class="mt-3">
                    <label for="change-password-form-2" class="form-label">Confirm Password</label>
                    <input id="change-password-form-2" type="password" name="password_confirmation" class="form-control" placeholder="Confirm password" autocomplete="new-password"/>
                    <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                </div>
                <button type="submit" class="btn btn-primary mt-4">Change Password</button>
                </form>
            </div>
        </div>
        <!-- END: Change Password -->
    </div>
</div>

</x-app-layout>
