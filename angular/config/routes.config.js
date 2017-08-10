export function RoutesConfig($stateProvider, $urlRouterProvider) {
    'ngInject';

    let getView = (viewName) => {
        return `./../views/app/pages/${viewName}/${viewName}.page.html`;
    };

    $urlRouterProvider.otherwise('/');

    /*
        data: {auth: true} would require JWT auth
        However you can't apply it to the abstract state
        or landing state because you'll enter a redirect loop
    */


/*
administrators
chat
 */
    $stateProvider
        .state('app', {
            abstract: true,
            data: {},
            views: {
                header: {
                    templateUrl: getView('header')
                },
                footer: {
                    templateUrl: getView('footer')
                },
                main: {}
            }
        })
        .state('app.administrators', {
            url: '/administrators',
            views: {
                'main@': {
                    templateUrl: getView('administrators')
                }
            }
        })
        .state('app.chat', {
            url: '/chat',
            views: {
                'main@': {
                    templateUrl: getView('chat')
                }
            }
        })
        .state('app.payments', {
            url: '/payments',
            views: {
                'main@': {
                    templateUrl: getView('payments')
                }
            }
        })
        .state('app.settings', {
            url: '/settings',
            views: {
                'main@': {
                    templateUrl: getView('settings')
                }
            }
        }) 
        .state('app.students', {
            url: '/students',
            views: {
                'main@': {
                    templateUrl: getView('students')
                }
            }
        })
        .state('app.teachers', {
            url: '/teachers',
            views: {
                'main@': {
                    templateUrl: getView('teachers')
                }
            }
        })
        .state('app.talking', {
            url: '/talking',
            views: {
                'main@': {
                    templateUrl: getView('talking')
                }
            }
        })
        .state('app.dashboard', {
            url: '/',
            views: {
                'main@': {
                    templateUrl: getView('dashboard')
                }
            }
        })
        .state('app.login', {
            url: '/login',
            views: {
                'main@': {
                    templateUrl: getView('login')
                }
            }
        })
        .state('app.register', {
            url: '/register',
            views: {
                'main@': {
                    templateUrl: getView('register')
                }
            }
        })
        .state('app.forgot_password', {
            url: '/forgot-password',
            views: {
                'main@': {
                    templateUrl: getView('forgot-password')
                }
            }
        })
        .state('app.reset_password', {
            url: '/reset-password/:email/:token',
            views: {
                'main@': {
                    templateUrl: getView('reset-password')
                }
            }
        });
}
