<?php

class AuthController extends BaseController {

    /**
     * Отображает страницу входа
     *
     * @return Illuminate\View\View
     */
    public function getLogin()
    {
        $title = 'Вход';
        return View::make('auth.login', compact('title'));
    }

    /**
     * Аутентифицирует и редиректит в админку
     *
     * @return Illuminate\Http\RedirectResponse
     */
    public function postLogin()
    {
        Input::flash();

        try {
            $credentials = array(
                'username' => Input::get('username'), 
                'password' => Input::get('password')
            );
            $rememberMe = Input::get('remember-me', false);
            $user = Sentry::authenticate($credentials, $rememberMe);
        } catch (Exception $e) {
            return Redirect::to(route('auth.login'))
                ->withErrors(array($e->getMessage()));
        }

        return Redirect::intended(route('admin'));
    }

    /**
     * Обрабатывает выход
     *
     * @return Illuminate\Http\RedirectResponse
     */
    public function getLogout()
    {
        Sentry::logout();
        return Redirect::route('auth.login');
    }
}
