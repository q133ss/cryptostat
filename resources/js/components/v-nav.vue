<template>
    <div class="nav-container">
        <div class="mobile-topbar-header">
            <div>
                <img src="/assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
            </div>
            <div>
                <h4 class="logo-text">Syndron</h4>
            </div>
            <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
            </div>
        </div>
        <nav class="topbar-nav">
            <ul class="metismenu" id="menu">
                <li>
                    <a href="/dashboard">
                        <div class="parent-icon"><i class='bx bx-home-circle'></i>
                        </div>
                        <div class="menu-title">Мой портфель</div>
                    </a>
                </li>

                <li>
                    <a href="/dashboard/strategy">
                        <div class="parent-icon"><i class='bx bx-line-chart'></i>
                        </div>
                        <div class="menu-title">Стратегии инвестирования</div>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <div class="parent-icon"><i class='bx bx-line-chart'></i>
                        </div>
                        <div class="menu-title">Волотильность монет</div>
                    </a>
                </li>

                <li>
                    <a href="/dashboard/rating">
                        <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
                        </div>
                        <div class="menu-title">Рейтинг монет</div>
                    </a>
                </li>
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon"><i class="bx bx-lock"></i>
                        </div>
                        <div class="menu-title">Authentication</div>
                    </a>
                    <ul>
                        <li> <a href="authentication-signin.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>Sign In</a>
                        </li>
                        <li> <a href="authentication-signup.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>Sign Up</a>
                        </li>
                        <li> <a href="authentication-signin-with-header-footer.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>Sign In with Header & Footer</a>
                        </li>
                        <li> <a href="authentication-signup-with-header-footer.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>Sign Up with Header & Footer</a>
                        </li>
                        <li> <a href="authentication-forgot-password.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>Forgot Password</a>
                        </li>
                        <li> <a href="authentication-reset-password.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>Reset Password</a>
                        </li>
                        <li> <a href="authentication-lock-screen.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>Lock Screen</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon icon-color-6"> <i class="bx bx-donate-blood"></i>
                        </div>
                        <div class="menu-title">Pages</div>
                    </a>
                    <ul>
                        <li> <a href="user-profile.html"><i class="bx bx-right-arrow-alt"></i>User Profile</a>
                        </li>
                        <li> <a href="timeline.html"><i class="bx bx-right-arrow-alt"></i>Timeline</a>
                        </li>
                        <li> <a href="pricing-table.html"><i class="bx bx-right-arrow-alt"></i>Pricing</a>
                        </li>
                        <li> <a class="has-arrow" href="javascript:;"><i class="bx bx-right-arrow-alt"></i>Errors</a>
                            <ul>
                                <li> <a href="errors-404-error.html"><i class="bx bx-right-arrow-alt"></i>404 Error</a>
                                </li>
                                <li> <a href="errors-500-error.html"><i class="bx bx-right-arrow-alt"></i>500 Error</a>
                                </li>
                                <li> <a href="errors-coming-soon.html"><i class="bx bx-right-arrow-alt"></i>Coming Soon</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon"><i class='bx bx-message-square-edit'></i>
                        </div>
                        <div class="menu-title">Forms</div>
                    </a>
                    <ul>
                        <li> <a href="form-elements.html"><i class="bx bx-right-arrow-alt"></i>Form Elements</a>
                        </li>
                        <li> <a href="form-input-group.html"><i class="bx bx-right-arrow-alt"></i>Input Groups</a>
                        </li>
                        <li> <a href="form-layouts.html"><i class="bx bx-right-arrow-alt"></i>Forms Layouts</a>
                        </li>
                        <li> <a href="form-validations.html"><i class="bx bx-right-arrow-alt"></i>Form Validation</a>
                        </li>
                        <li> <a href="form-wizard.html"><i class="bx bx-right-arrow-alt"></i>Form Wizard</a>
                        </li>
                        <li> <a href="form-text-editor.html"><i class="bx bx-right-arrow-alt"></i>Text Editor</a>
                        </li>
                        <li> <a href="form-file-upload.html"><i class="bx bx-right-arrow-alt"></i>File Upload</a>
                        </li>
                        <li> <a href="form-date-time-pickes.html"><i class="bx bx-right-arrow-alt"></i>Date Pickers</a>
                        </li>
                        <li> <a href="form-select2.html"><i class="bx bx-right-arrow-alt"></i>Select2</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</template>

<script>
export default {
    data() {
        return {
            links: [
                {
                    title: 'Мой портфель',
                    href: '/dashboard'
                },
                {
                    title: 'Стратегии инвестирования',
                    href: '/strategy'
                },
                {
                    title: 'Волотильность монет',
                    href: '#'
                },
                {
                    title: 'Рейтинг монет',
                    href: '/rating'
                },
            ]
        }
    }
}
</script>

<style scoped>

</style>
